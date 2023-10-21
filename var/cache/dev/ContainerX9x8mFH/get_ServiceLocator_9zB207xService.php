<?php

namespace ContainerX9x8mFH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9zB207xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9zB207x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9zB207x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthorController::add' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\AuthorController::deleteAuthor' => ['privates', '.service_locator.H4SGbCy', 'get_ServiceLocator_H4SGbCyService', true],
            'App\\Controller\\AuthorController::listauthor' => ['privates', '.service_locator.4HiMcib', 'get_ServiceLocator_4HiMcibService', true],
            'App\\Controller\\AuthorController::update' => ['privates', '.service_locator.H4SGbCy', 'get_ServiceLocator_H4SGbCyService', true],
            'App\\Controller\\BookController::add' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\BookController::deleteBook' => ['privates', '.service_locator.mt0ng2f', 'get_ServiceLocator_Mt0ng2fService', true],
            'App\\Controller\\BookController::listbook' => ['privates', '.service_locator.LAuijrF', 'get_ServiceLocator_LAuijrFService', true],
            'App\\Controller\\BookController::update' => ['privates', '.service_locator.mt0ng2f', 'get_ServiceLocator_Mt0ng2fService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AuthorController:add' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\AuthorController:deleteAuthor' => ['privates', '.service_locator.H4SGbCy', 'get_ServiceLocator_H4SGbCyService', true],
            'App\\Controller\\AuthorController:listauthor' => ['privates', '.service_locator.4HiMcib', 'get_ServiceLocator_4HiMcibService', true],
            'App\\Controller\\AuthorController:update' => ['privates', '.service_locator.H4SGbCy', 'get_ServiceLocator_H4SGbCyService', true],
            'App\\Controller\\BookController:add' => ['privates', '.service_locator.cg5DUby', 'get_ServiceLocator_Cg5DUbyService', true],
            'App\\Controller\\BookController:deleteBook' => ['privates', '.service_locator.mt0ng2f', 'get_ServiceLocator_Mt0ng2fService', true],
            'App\\Controller\\BookController:listbook' => ['privates', '.service_locator.LAuijrF', 'get_ServiceLocator_LAuijrFService', true],
            'App\\Controller\\BookController:update' => ['privates', '.service_locator.mt0ng2f', 'get_ServiceLocator_Mt0ng2fService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AuthorController::add' => '?',
            'App\\Controller\\AuthorController::deleteAuthor' => '?',
            'App\\Controller\\AuthorController::listauthor' => '?',
            'App\\Controller\\AuthorController::update' => '?',
            'App\\Controller\\BookController::add' => '?',
            'App\\Controller\\BookController::deleteBook' => '?',
            'App\\Controller\\BookController::listbook' => '?',
            'App\\Controller\\BookController::update' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AuthorController:add' => '?',
            'App\\Controller\\AuthorController:deleteAuthor' => '?',
            'App\\Controller\\AuthorController:listauthor' => '?',
            'App\\Controller\\AuthorController:update' => '?',
            'App\\Controller\\BookController:add' => '?',
            'App\\Controller\\BookController:deleteBook' => '?',
            'App\\Controller\\BookController:listbook' => '?',
            'App\\Controller\\BookController:update' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
