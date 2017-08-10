<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/8/17
 * Time: 9:53 PM
 */

class html extends Tag {

    function __construct(array $attributes = [], array $contains = []) {
    	$html_attributes = array("manifest"=>"", "version"=>"", "xmlns"=>"");
        parent::__construct("html", array_merge($this->get_attributes(), $html_attributes), false, true, $contains);
    }

}