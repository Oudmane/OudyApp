<?php

include_once __DIR__.'/vendor/autoload.php';

use OudyPlat\Template;
use OudyPlat\Object;
use OudyPlat\Page;
use OudyPlat\Session;
use OudyPlat\MySQL;

Template::$configuration = new Object(array(
    'name'=> 'default'
));

Page::$pages = array(
    '/'=> array(
        'component'=> 'page',
        'task'=> 'home'
    ),
    '/request'=> array(
        'component'=> 'page',
        'task'=> 'request'
    ),
    '/session'=> array(
        'component'=> 'page',
        'task'=> 'session'
    )
);

Session::$configuration = array();

MySQL::configure('azure.server.oudy.works', 'oudyapp', 'oudyapp', 'oudyapp');

define('COMPONENTS_PATH', __DIR__.'/components/');
define('TEMPLATES_PATH', __DIR__.'/templates/');
define('MODULES_PATH', __DIR__.'/modules/');