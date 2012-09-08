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

    	if($token == "Anon.")
			return $this->render('IFZTowerofDimensionsBundle:Default:index.html.twig');
		else
			$this->login($token);
    }
}
