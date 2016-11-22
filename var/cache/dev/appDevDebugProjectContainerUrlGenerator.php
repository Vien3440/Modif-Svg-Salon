<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_adminhome_gethome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminHomeController::getHome',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminLoginController::getLogin',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'loginCheck' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminLoginController::check',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginCheck',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'loginOut' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminLoginController::logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginOut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminResto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::indexResto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminRestoAdd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::addResto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resto/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validResto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::getResto',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/resto/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suprResto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/resto/deleteR',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editResto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::editSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/resto/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifResto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::uptdateSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/resto/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminSalon' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminSalonController::indexSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/salon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminSalonAdd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminSalonController::addSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/salon/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'valid' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminSalonController::getSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/salon/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suprSalon' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminSalonController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/salon/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editSalon' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminSalonController::editSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/salon/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifSalon' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminSalonController::uptdateSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/salon/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getHome',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'salon' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getSalon',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/salon',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteInternetBundle\\Controller\\ViewController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getRestauration',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'siteinternet_view_getcontact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getContact',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
