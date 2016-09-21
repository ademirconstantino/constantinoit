<?php
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
if ($lang=portuguese) {
    header("Location: http://www.constantinoit.com/ptbr");
    } else if ($lang=spanish) {
        header("Location: http://www.constantinoit.com/es");
    } else {
        header("Location: http://www.constantinoit.com/en");
    }
?>