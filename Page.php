<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/4/17
 * Time: 8:57 PM
 */

class Page {
    var $head;
    var $body;
    var $stylesheets = array();
    var $scripts = array();

    function register_stylesheet($href) {
        array_push($this->stylesheets, $href);
    }

    function register_script($src) {
        array_push($this->scripts, $src);
    }

    public function __construct() {
        $this->head = "<!DOCTYPE HTML>";
    }


}