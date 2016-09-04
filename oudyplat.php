<?php

include_once __DIR__.'/vendor/autoload.php';

use OudyPlat\Template;
use OudyPlat\Object;
use OudyPlat\Page;

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
    )
);

define('COMPONENTS_PATH', __DIR__.'/components/');
define('TEMPLATES_PATH', __DIR__.'/templates/');