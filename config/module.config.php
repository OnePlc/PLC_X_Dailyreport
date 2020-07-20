<?php
/**
 * module.config.php - Dailyreport Config
 *
 * Main Config File for Dailyreport Module
 *
 * @category Config
 * @package Dailyreport
 * @author Verein onePlace
 * @copyright (C) 2020  Verein onePlace <admin@1plc.ch>
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 * @since 1.0.0
 */

namespace OnePlace\Dailyreport;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    # Dailyreport Module - Routes
    'router' => [
        'routes' => [
            # Module Basic Route
            'dailyreport' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/dailyreport[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\DailyreportController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'dailyreport-setup' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/dailyreport/setup[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\InstallController::class,
                        'action'     => 'checkdb',
                    ],
                ],
            ],
            'dailyreport-api' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/dailyreport/api[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ApiController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'dailyreport-export' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/dailyreport/export[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\ExportController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'dailyreport-search' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/dailyreport/search[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\SearchController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'dailyreport-plugin' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/dailyreport/plugin[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\PluginController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

    # View Settings
    'view_manager' => [
        'template_path_stack' => [
            'dailyreport' => __DIR__ . '/../view',
        ],
    ],

    # Translator
    'translator' => [
        'locale' => 'de_DE',
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ],
        ],
    ],
];
