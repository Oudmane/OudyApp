<?php

/**
 * @var \OudyPlat\Application $this
 * @var \OudyPlat\Page $page
 * @var \OudyPlat\Request $request
 * @var \OudyPlat\Session $session
 * @var \OudyPlat\Language $language
 * @var \OudyPlat\Object $data
 */

?>
<h2>Request</h2>
<p>This is request page</p>
<h3>Post</h3>
<form action="/request" method="post">
    <label>
        Name: <input type="text" name="user[name]">
    </label>
    <br>
    <label>
        Email: <input type="text" name="user[email]">
    </label>
    <br>
    <label>
        Password: <input type="password" name="user[password]">
    </label>
    <br>
    <button>Submit</button>
</form>

<pre><?php echo $data->user; ?></pre>