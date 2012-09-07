<?php

namespace IFZ\TowerofDimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('IFZTowerofDimensionsBundle:Default:index.html.twig', array('name' => $name));
    }
}
