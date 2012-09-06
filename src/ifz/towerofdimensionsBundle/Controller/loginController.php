<?php

namespace ifz\towerofdimensionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class loginController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function initAction()
    {
        return $this->render('ifztowerofdimensionsBundle:login:index.html.twig');
    }
}
