<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;

class Module implements ConfigProviderInterface, ConsoleUsageProviderInterface
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConsoleUsage(Console $console)
    {
        return array(
            // Describe available commands
            // Suggestions part
            'fetch [--verbose|-v] suggestion KEYWORD'   => 'Fetch google suggestion by keyword and store it in DB',
            'find [--verbose|-v] suggestion KEYWORD'    => 'Find stored google suggestions by keyword and show them',
            'show [--verbose|-v] suggestion ID'         => 'Show stored google suggestion by id and show it',
            'delete [--verbose|-v] suggestion ID'       => 'Delete stored google suggestion by id',

            // Novus part
            'fetch [--verbose|-v] novus'   => 'Fetch novus bakery information and store it in DB',

            // Describe expected parameters
            array( 'KEYWORD',       'Keyword for looking suggestions in Google' ),
            array( 'ID',            'Id of stored suggestion' ),
            array( '--verbose|-v',  '(optional) turn on verbose mode'),
        );
    }

}
