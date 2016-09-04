<?php

include_once '../oudyplat.php';

use OudyPlat\Application;

$application = new Application();

$application->loadByPageURL();

//echo json_encode($application, JSON_PRETTY_PRINT);

$application->render($_GET['format'] ?? 'layout');
