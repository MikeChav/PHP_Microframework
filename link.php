<?php
/**
 * Created by IntelliJ IDEA.
 * User: Yawo Siatitse
 * Date: 8/9/2017
 * Time: 11:43 PM
 */

class link extends Tag
{
    function __construct(array $attributes = [])
    {
        $link_attributes = array("rel"=>"","type"=>"","href"=>"");
        parent::__construct("link", array_merge($attributes,$link_attributes), true, false);
    }

}