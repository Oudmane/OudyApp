<?php

/**
 * @var \OudyPlat\Application $this
 * @var \OudyPlat\Page $page
 * @var \OudyPlat\Request $request
 * @var \OudyPlat\Session $session
 * @var \OudyPlat\Language $language
 * @var \OudyPlat\Object $data
 */

$this->setHeader('html');

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $page->title; ?></title>
    </head>
    <body>
        <?php $this->render('view'); ?>
    </body>
</html>