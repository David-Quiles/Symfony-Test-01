<?php

namespace ContainerVxGZ83e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDummyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DummyController' shared autowired service.
     *
     * @return \App\Controller\DummyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DummyController.php';

        $container->services['App\\Controller\\DummyController'] = $instance = new \App\Controller\DummyController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\DummyController', $container));

        return $instance;
    }
}
