<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // fp_openid_security_login
        if ($pathinfo === '/login_openid') {
            return array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fp_openid_security_login',);
        }

        // fp_openid_security_check
        if ($pathinfo === '/login_check_openid') {
            return array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fp_openid_security_check',);
        }

        // fp_openid_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fp_openid_security_logout',);
        }

        // IFZTowerofDimensionsBundle_mercenariesDetail
        if (0 === strpos($pathinfo, '/mercenaries/detail') && preg_match('#^/mercenaries/detail/(?P<id>[^/]+?)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'IFZTowerofDimensionsBundle_mercenariesDetail');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'IFZ\\TowerofDimensionsBundle\\Controller\\MercenariesController::mercenariesDetailAction',  'id' => 'empty',)), array('_route' => 'IFZTowerofDimensionsBundle_mercenariesDetail'));
        }

        // IFZTowerofDimensionsBundle_mercenaries
        if (rtrim($pathinfo, '/') === '/mercenaries') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'IFZTowerofDimensionsBundle_mercenaries');
            }
            return array (  '_controller' => 'IFZ\\TowerofDimensionsBundle\\Controller\\MercenariesController::mercenariesAction',  '_route' => 'IFZTowerofDimensionsBundle_mercenaries',);
        }

        // IFZTowerofDimensionsBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'IFZTowerofDimensionsBundle_homepage');
            }
            return array (  '_controller' => 'IFZ\\TowerofDimensionsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'IFZTowerofDimensionsBundle_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
