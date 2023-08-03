<?php





// Date
$_['date_timezone']        = 'UTC';

// Database
$_['db_autostart'] = true;
$_['db_engine'] = DB_DRIVER; // mysqli, pdo or pgsql
$_['db_hostname'] = DB_HOSTNAME;
$_['db_username'] = DB_USERNAME;
$_['db_password'] = DB_PASSWORD;
$_['db_database'] = DB_DATABASE;
$_['db_port'] = DB_PORT;
// Reponse
$_['response_header'] = array('Content-Type: text/html; charset=utf-8');
$_['response_compression'] = 0;
// Session
$_['session_autostart'] = false;
$_['session_engine'] = 'db'; // db or file
// Actions
$_['action_pre_action'] = [
    'common/home'
];

// Template
$_['template_engine']      = 'twig';
$_['template_extension']   = '.twig';

// Actions
$_['action_default']       = 'common/home';
$_['action_error']         = 'error/not_found';
$_['action_post_action']   = [];

$_['action_event'] = [
    'controller/*/before' => [
       // 0 => 'event/language|before',
       // 1 => 'event/debug|before'
    ]
    // 'controller/*/after' => [
    //     0 => 'event/language|after',
    // 2 => 'event/debug|after'
    //],
    // 'view/*/before' => [
    //     500 => 'event/theme',
    //    998 => 'event/language'
    // ],
    // 'language/*/after' => [
    //     0 => 'event/translation'
    // ]
];
