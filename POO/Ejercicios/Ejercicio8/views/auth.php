<?php
setcookie ('user', $_POST['user'], time() + 3600 * 24);
setcookie ('password', $_POST['password'], time() + 3600 * 24);

$array = array(
    user => $_POST['password']
);
