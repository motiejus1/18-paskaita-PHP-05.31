<?php

function Redirect($url) {
    flush(); // Flush the buffer
    ob_flush();
    header("Location: $url"); // Rewrite the header
    die;
}

?>