<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/4/17
 * Time: 8:52 PM
 */

define('br', '<br/>');

function define_stylesheet($href) {
    return "<link href='$href' rel='stylesheet' />";
}

function define_script($src) {
    return "<script type='application/javascript' src='$src'></script>";
}


echo define_stylesheet("css/style.css");
