<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // admin_adminhome_gethome
        if ($pathinfo === '/admin/home') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AdminHomeController::getHome',  '_route' => 'admin_adminhome_gethome',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminLoginController::getLogin',  '_route' => 'login',);
            }

            // loginCheck
            if ($pathinfo === '/loginCheck') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminLoginController::check',  '_route' => 'loginCheck',);
            }

            // loginOut
            if ($pathinfo === '/loginOut') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminLoginController::logout',  '_route' => 'loginOut',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/resto')) {
                // adminResto
                if ($pathinfo === '/admin/resto') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::indexResto',  '_route' => 'adminResto',);
                }

                // adminRestoAdd
                if ($pathinfo === '/admin/resto/add') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::addResto',  '_route' => 'adminRestoAdd',);
                }

                // validResto
                if ($pathinfo === '/admin/resto/get') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::getResto',  '_route' => 'validResto',);
                }

                // suprResto
                if (0 === strpos($pathinfo, '/admin/resto/deleteR') && preg_match('#^/admin/resto/deleteR/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suprResto')), array (  '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::deleteAction',));
                }

                // editResto
                if (0 === strpos($pathinfo, '/admin/resto/edit') && preg_match('#^/admin/resto/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editResto')), array (  '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::editSalon',));
                }

                // modifResto
                if (0 === strpos($pathinfo, '/admin/resto/update') && preg_match('#^/admin/resto/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifResto')), array (  '_controller' => 'AdminBundle\\Controller\\AdminRestaurationController::uptdateSalon',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/salon')) {
                // adminSalon
                if ($pathinfo === '/admin/salon') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminSalonController::indexSalon',  '_route' => 'adminSalon',);
                }

                // adminSalonAdd
                if ($pathinfo === '/admin/salon/add') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminSalonController::addSalon',  '_route' => 'adminSalonAdd',);
                }

                // valid
                if ($pathinfo === '/admin/salon/get') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminSalonController::getSalon',  '_route' => 'valid',);
                }

                // suprSalon
                if (0 === strpos($pathinfo, '/admin/salon/delete') && preg_match('#^/admin/salon/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suprSalon')), array (  '_controller' => 'AdminBundle\\Controller\\AdminSalonController::deleteAction',));
                }

                // editSalon
                if (0 === strpos($pathinfo, '/admin/salon/edit') && preg_match('#^/admin/salon/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editSalon')), array (  '_controller' => 'AdminBundle\\Controller\\AdminSalonController::editSalon',));
                }

                // modifSalon
                if (0 === strpos($pathinfo, '/admin/salon/update') && preg_match('#^/admin/salon/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifSalon')), array (  '_controller' => 'AdminBundle\\Controller\\AdminSalonController::uptdateSalon',));
                }

            }

        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getHome',  '_route' => 'home',);
        }

        // salon
        if ($pathinfo === '/salon') {
            return array (  '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getSalon',  '_route' => 'salon',);
        }

        // conta
        if ($pathinfo === '/conta') {
            return array (  '_controller' => 'SiteInternetBundle\\Controller\\ViewController::indexAction',  '_route' => 'conta',);
        }

        // resto
        if ($pathinfo === '/resto') {
            return array (  '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getRestauration',  '_route' => 'resto',);
        }

        // siteinternet_view_getcontact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'SiteInternetBundle\\Controller\\ViewController::getContact',  '_route' => 'siteinternet_view_getcontact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
