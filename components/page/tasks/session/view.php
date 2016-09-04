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
<h2>Session</h2>
<p>This is session page</p>
<h3>Session object</h3>
<pre><?php echo json_encode($data->session, JSON_PRETTY_PRINT); ?></pre>
<form action="/session" method="POST">
    <label>
        Key: <input type="text" name="set[key]">
    </label>
    <br>
    <label>
        Value: <input type="text" name="set[value]">
    </label>
    <br>
    <button>Submit</button>
</form>