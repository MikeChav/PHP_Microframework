<?php
/**
 * Created by IntelliJ IDEA.
 * User: YawoSiatitse
 * Date: 8/9/2017
 * Time: 11:43 PM
 */

class style extends Tag
{
    function __construct(array $attributes = [])
    {
        $style_attributes = array("media"=>"", "scoped"=>"", "type"=>"");
        parent::__construct("style", array_merge($attributes, $style_attributes), false, false);
    }

}