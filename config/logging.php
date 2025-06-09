<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
<<<<<<< HEAD
use Monolog\Processor\PsrLogMessageProcessor;
=======
<<<<<<< HEAD
use Monolog\Processor\PsrLogMessageProcessor;
=======
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
=======
<<<<<<< HEAD
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
=======
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],
<<<<<<< HEAD
=======
=======
    'deprecations' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
<<<<<<< HEAD
=======
=======
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
    |
    */

    'channels' => [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', env('LOG_STACK', 'single')),
<<<<<<< HEAD
=======
=======
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
            'replace_placeholders' => true,
=======
<<<<<<< HEAD
            'replace_placeholders' => true,
=======
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
=======
<<<<<<< HEAD
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
=======
            'days' => 14,
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
<<<<<<< HEAD
=======
=======
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
<<<<<<< HEAD
=======
=======
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
            'handler_with' => [
                'stream' => 'php://stderr',
            ],
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'processors' => [PsrLogMessageProcessor::class],
<<<<<<< HEAD
=======
=======
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
=======
<<<<<<< HEAD
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
=======
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
<<<<<<< HEAD
            'replace_placeholders' => true,
=======
<<<<<<< HEAD
            'replace_placeholders' => true,
=======
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
    ],

];
