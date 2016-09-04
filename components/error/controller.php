<?php

/**
 * @var \OudyPlat\Application $this
 * @var \OudyPlat\Page $page
 * @var \OudyPlat\Request $request
 * @var \OudyPlat\Session $session
 * @var \OudyPlat\Language $language
 * @var \OudyPlat\Object $data
 */

switch ($page->task) {
    case 404:
    default:
        $data->code = $page->task;
        $data->status = 404;
        $data->error = 'Page not found';
        $data->message = 'The page you\'re looking for doesn\'t exist';
        break;
}

$this->setHeader($data->status);

$page->preTitle($data->error);