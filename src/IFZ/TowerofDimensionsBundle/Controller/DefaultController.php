<?php

namespace IFZ\TowerofDimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\DependencyInjection\ContainerAware;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
    	$token = $this->container->get('security.context')->getToken()->getUser();
        
    	if($token == "anon.")
			return $this->render('IFZTowerofDimensionsBundle:Default:index.html.twig');
		else
			$info = $this->login($token);

        if($info["nick"] != 0)
            return $this->render('IFZTowerofDimensionsBundle:Default:index.html.twig');
        else
            return $this->render('IFZTowerofDimensionsBundle:Default:container.html.twig',
                    $info
                );
    }

    public function login($token)
    {
        if (strpos($token, "http://steamcommunity.com/openid/id/") == 0)
        {
            $token = str_replace("http://steamcommunity.com/openid/id/", "",$token);
            $restUrl = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=1BAC09271DF89CC273F6959BD63F1E6B&steamids=".$token;
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
                    'avatar' => $json->response->players[0]->avatar
                ); 
        }
       else
        {
            $info = array(
                    'nick' => 0,
                    'avatar' => 0
                ); 
        }
        return $info;
    }
}
