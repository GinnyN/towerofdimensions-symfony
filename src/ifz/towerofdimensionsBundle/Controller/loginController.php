<?php

namespace ifz\towerofdimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LoginController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function initAction($steam = "empty")
    {
    	$url = $this->get('security.context')->getToken()->getUser();

    	if($url == "anon." && $steam != "empty")
    		return $this->render('ifztowerofdimensionsBundle:Login:providers.html.twig',
    			array(
        			'provider' => $steam, 
        		)
        	);
    	else
	        return $this->render('ifztowerofdimensionsBundle:Login:index.html.twig', 
	        		array(
	        			'url' => $url, 
	        		)
	        	);
    }
}
