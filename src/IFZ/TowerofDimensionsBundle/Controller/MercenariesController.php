<?php

namespace IFZ\TowerofDimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\DependencyInjection\ContainerAware;


class MercenariesController extends Controller
{
    public function mercenariesAction()
    {
        return $this->render('IFZTowerofDimensionsBundle:Default:mercenaries-index.html.twig');
    }
}