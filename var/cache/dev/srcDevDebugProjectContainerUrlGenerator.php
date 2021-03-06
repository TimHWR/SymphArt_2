<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'article_list' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::index'), array(), array(array('text', '/')), array(), array()),
        'new_article' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::new'), array(), array(array('text', '/article/new')), array(), array()),
        'edit_article' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::edit'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/article/edit')), array(), array()),
        'article_show' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/article')), array(), array()),
        'signal' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::signal'), array(), array(array('text', '/signal')), array(), array()),
        'app_article_deletearticle' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::deleteArticle'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/article/delete')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
