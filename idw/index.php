<?php
if($_SERVER['HTTP_HOST'] == 'localhost') {
    $redirectUrl = 'http://localhost/kort-home';
} else {
    $redirectUrl = 'http://www.kort.ch';
}
$redirectUrl .= '/presentation/idw.html';

header('Location: ' . $redirectUrl);