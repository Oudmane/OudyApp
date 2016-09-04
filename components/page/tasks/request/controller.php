<?php

/**
 * @var \OudyPlat\Application $this
 * @var \OudyPlat\Page $page
 * @var \OudyPlat\Request $request
 * @var \OudyPlat\Session $session
 * @var \OudyPlat\Language $language
 * @var \OudyPlat\Object $data
 */

use OudyPlat\Object;

$data->user = new Object();

if($user = $request->getPost('user'))
    $data->user->__construct($user);

$page->preTitle('Request');