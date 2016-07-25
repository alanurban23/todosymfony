<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // blog_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_home');
            }

            return array (  '_controller' => 'ToDoBundle\\Controller\\HomeController::indexAction',  '_route' => 'blog_home',);
        }

        if (0 === strpos($pathinfo, '/rest')) {
            // get
            if (0 === strpos($pathinfo, '/rest/') && preg_match('#^/rest/(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get')), array (  '_controller' => 'ToDoBundle\\Controller\\HomeController::getAction',  '_format' => 'json',));
            }
            not_get:

            // index
            if (0 === strpos($pathinfo, '/rest/index') && preg_match('#^/rest/index(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'index')), array (  '_controller' => 'ToDoBundle\\Controller\\HomeController::indexAction',  '_format' => 'json',));
            }
            not_index:

            // post
            if (0 === strpos($pathinfo, '/rest/') && preg_match('#^/rest/(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post')), array (  '_controller' => 'ToDoBundle\\Controller\\HomeController::postAction',  '_format' => 'json',));
            }
            not_post:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
