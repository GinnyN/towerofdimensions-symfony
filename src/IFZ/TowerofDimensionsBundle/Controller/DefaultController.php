<?php

namespace IFZ\TowerofDimensionsBundle\Controller;

use IFZ\TowerofDimensionsBundle\Entity\Steam;
use IFZ\TowerofDimensionsBundle\Entity\Player;
use IFZ\TowerofDimensionsBundle\Entity\Mercenary;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class DefaultController extends Controller
{   
    public function indexAction(Request $request)
    {
    	$token = $this->container->get('security.context')->getToken()->getUser();

    	if($token == "anon.")
			return $this->render('IFZTowerofDimensionsBundle:Default:index.html.twig');
		else
			$info = $this->login($token, $request);

        if($info["nick"] != 0)
            return $this->render('IFZTowerofDimensionsBundle:Default:index.html.twig');
        else{

            $steam = $this->getDoctrine()->getRepository('IFZTowerofDimensionsBundle:Steam')->findBySteamId($info["steamId"]);

            if(!$steam)
            {
                $steam = new Steam();
                $steam->setSteamId($info["steamId"]);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($steam);
                $em->flush();

                $steam->setPlayer($this->newPlayer());
                $em->persist($steam);
                $em->flush();
            }

            $session = $this->get("session");
            $session->start();
            $session->set('player', $info["steamId"]);

            $info = array_merge($info, array("coins" => $steam->getPlayer()->getCoins()));

            return $this->render('IFZTowerofDimensionsBundle:Default:container.html.twig',
                    $info
                );
        }
    }

    private function newPlayer()
    {
        $data = file_get_contents(__DIR__."/../json/newUser.json");      
        str_replace("/n","",$data); 
        $data = json_decode($data);

        $em = $this->getDoctrine()->getEntityManager();

        $player = new Player();

        $player->setCoins($data->user->dinero);
        $player->setMoney(20);

        foreach($data->user->mercenarios as $mercenario)
        {
            $new = new Mercenary();
            $new->readFromJson($mercenario);
            $player->addMercenary($new);
        }

        return $player;
    }

    private function login($token, $request)
    {
       // var_dump(strpos($token, "steamcommunity.com/openid/id/"));
        if (strpos($token, "steamcommunity.com/openid/id/"))
        {
           // var_dump("Steam");
            $token = str_replace("http://steamcommunity.com/openid/id/", "",$token);
            $restUrl = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$this->container->getParameter('steam_hash')."&steamids=".$token;
            
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $restUrl);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            $response = curl_exec($curl);
            $status = curl_getinfo($curl);
            curl_close($curl);
            
            $json = json_decode($response);
            $info = array(
                    'steamId' => $token,
                    'nick' => $json->response->players[0]->personaname,
                    'avatar' => $json->response->players[0]->avatarfull
                ); 
        }
       else
       {
           /* if (strpos($token, "www.google.com/accounts/o8/id?id="))
           {
                //$request = Request::createFromGlobals();
               // var_dump($request);
                //var_dump($request->request->all());
                if(($request->query->get("openid.mode") == "cancel") || ($request->request->get("openid.mode") == ""))
                {    
                    $info = array(
                            'nick' => 0,
                            'avatar' => 0
                        );
                } 
                else
                {
                    var_dump($request->query);
                    $info = array(
                            'nick' => $request->query->get("openid.firstname"),
                            'avatar' => $request->query->get("openid.avatar")
                        );  
                }
           }
           else
            {*/
                $info = array(
                        'nick' => 0,
                        'avatar' => 0
                    ); 
           // }
        }
        
        return $info;
    }
}
