<?php

namespace Container82WMUb2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShowRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Twig\Runtime\ShowRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\ShowRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Runtime'.\DIRECTORY_SEPARATOR.'ShowRuntime.php';

        return $container->privates['App\\Twig\\Runtime\\ShowRuntime'] = new \App\Twig\Runtime\ShowRuntime();
    }
}