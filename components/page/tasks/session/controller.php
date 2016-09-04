<?php

/**
 * @var \OudyPlat\Application $this
 * @var \OudyPlat\Page $page
 * @var \OudyPlat\Request $request
 * @var \OudyPlat\Session $session
 * @var \OudyPlat\Language $language
 * @var \OudyPlat\Object $data
 */

$data->session = $session;

if($add = $request->getPost('set'))
    $session->set($add['key'], $add['value']);

$page->preTitle('Session');
$page->preTitle($session->get('user_id'));