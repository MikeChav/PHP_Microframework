<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yawo Siatitse
 * Date: 8/9/2017
 * Time: 11:42 PM
 */

class script extends Tag
{
    function __construct(array $attributes = [])
    {
        $script_attributes = array("charset"=>"", "async"=>"", "defer"=>"", "src"=>"", "type"=>"", "xml:space"=>"");
        //"xml:space" Not supported in HTML5.  Specifies whether whitespace in code should be preserved
        parent::__construct("script", array_merge($attributes, $script_attributes), false, false);
    }
}