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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page->title; ?></title>
        <meta name="description" content="<?php echo $page->description; ?>">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="/marketing.css">
    </head>
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href="">Your Site</a>

                <?php $this->render('module', 'toolbar-right'); ?>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <?php $this->render('view'); ?>
            </div>

            <div class="footer l-box is-center">
                View the source of this layout to learn more. Made with love by the YUI Team.
            </div>
        </div>
    </body>
</html>