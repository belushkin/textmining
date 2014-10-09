<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Suggestions\Controller\Suggestions' => 'Suggestions\Controller\SuggestionsController',
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'fetch-suggestions' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'fetch [--verbose|-v] suggestion <keyword>',
                        'defaults' => array(
                            'controller' => 'Suggestions\Controller\Suggestions',
                            'action'     => 'fetch'
                        )
                    )
                ),
                'show-suggestions' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'show [--verbose|-v] suggestion [<id>]',
                        'defaults' => array(
                            'controller' => 'Suggestions\Controller\Suggestions',
                            'action'     => 'show'
                        )
                    )
                ),
                'find-suggestions' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'find [--verbose|-v] suggestion [<keyword>]',
                        'defaults' => array(
                            'controller' => 'Suggestions\Controller\Suggestions',
                            'action'     => 'find'
                        )
                    )
                ),
                'delete-suggestions' => array(
                    'type'    => 'simple',
                    'options' => array(
                        'route'    => 'delete suggestion <id>',
                        'defaults' => array(
                            'controller' => 'Suggestions\Controller\Suggestions',
                            'action'     => 'delete'
                        )
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);
