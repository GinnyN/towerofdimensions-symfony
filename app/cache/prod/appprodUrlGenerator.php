<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'fp_openid_security_login' => true,
       'fp_openid_security_check' => true,
       'fp_openid_security_logout' => true,
       'IFZTowerofDimensionsBundle_mercenaries' => true,
       'IFZTowerofDimensionsBundle_homepage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getfp_openid_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_openid',  ),));
    }

    private function getfp_openid_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check_openid',  ),));
    }

    private function getfp_openid_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getIFZTowerofDimensionsBundle_mercenariesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'IFZ\\TowerofDimensionsBundle\\Controller\\DefaultController::mercenariesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mercenaries/',  ),));
    }

    private function getIFZTowerofDimensionsBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'IFZ\\TowerofDimensionsBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }
}
