<?php

namespace IFZ\TowerofDimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\DependencyInjection\ContainerAware;


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
        else
            return $this->render('IFZTowerofDimensionsBundle:Default:container.html.twig',
                    $info
                );
    }

    public function login($token, $request)
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
