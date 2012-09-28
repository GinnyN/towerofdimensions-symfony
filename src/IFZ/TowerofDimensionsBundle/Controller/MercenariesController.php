<?php

namespace IFZ\TowerofDimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Component\Routing\RequestContext;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Collection;

class MercenariesController extends Controller
{
    public function mercenariesAction()
    {
        $session = $this->get("session");

        $steamId=$session->get("player");

        if(!$steamId)
        	return new RedirectResponse($this->container->get('router')->getContext()->getBaseUrl());
      
        $player = $this->getDoctrine()->getRepository('IFZTowerofDimensionsBundle:Steam')->findBySteamId($steamId);

        $mercenaries = $player->getPlayer()->getMercenaries();

       foreach($mercenaries as $mercenary)
        {
        	$merc[] = array(
        			"name" => $mercenary->getName(),
        			"hp" => $mercenary->getHpActual(),
        			"exp" => $mercenary->getExp(),
        			"level" => $mercenary->getNivel(),
        			"id" => $mercenary->getId(),
        			"busto" => $mercenary->getUrlBusto()
        		);
        }

        $info = array("mercenaries" => $merc);
        
        return $this->render('IFZTowerofDimensionsBundle:Default:mercenaries-index.html.twig', $info);
    }

    public function mercenariesDetailAction($id)
    {
    	$session = $this->get("session");

        $steamId=$session->get("player");

        if(!$steamId)
        	return new RedirectResponse($this->container->get('router')->getContext()->getBaseUrl());
      
        $player = $this->getDoctrine()->getRepository('IFZTowerofDimensionsBundle:Steam')->findBySteamId($steamId);

        $mercenaries = $player->getPlayer()->getMercenaries();

		foreach($mercenaries as $mercenary)
		{
			if($mercenary->getId() == $id)
			{
				$merc = array(
        			"name" => $mercenary->getName(),
        			"hp" => $mercenary->getHpActual(),
        			"exp" => $mercenary->getExp(),
        			"level" => $mercenary->getNivel(),
        			"id" => $mercenary->getId(),
        			"completo" => $mercenary->getUrlCompleto(),

        			"agilidad" => $mercenary->getAgilidad(),
        			"destreza" => $mercenary->getDestreza(),
        			"fuerza" => $mercenary->getFuerza(),
        			"constitucion" => $mercenary->getConstitucion(),
        			"inteligencia" => $mercenary->getInteligencia(),
        			"sabiduria" => $mercenary->getSabiduria(),
        			"carisma" => $mercenary->getCarisma(),
        			"poder" => $mercenary->getPoder()
        		);

    			break;
			}
		} 

		return $this->render('IFZTowerofDimensionsBundle:Default:mercenaries-detail.html.twig', $merc);       
    }
}