<?php

namespace Suggestions;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;

class Module implements ConfigProviderInterface, ConsoleUsageProviderInterface
{

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getConsoleUsage(Console $console)
    {
        return array(
            // Describe available commands
            'fetch suggestion [--verbose|-v] KEYWORD'   => 'Fetch google suggestion by keyword and store it in DB',
            'find suggestion [--verbose|-v] KEYWORD'    => 'Find stored google suggestions by keyword and show them',
            'show suggestion [--verbose|-v] ID'         => 'Show stored google suggestion by id and show it',
            'delete suggestion [--verbose|-v] ID'       => 'Delete stored google suggestion by id',

            // Describe expected parameters
            array( 'KEYWORD',       'Keyword for looking suggestions in Google' ),
            array( 'ID',            'Id of stored suggestion' ),
            array( '--verbose|-v',  '(optional) turn on verbose mode'),
        );
    }

}
