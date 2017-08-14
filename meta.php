<?php
/**
 * Created by IntelliJ IDEA.
 * User: YawoSiatitse
 * Date: 8/9/2017
 * Time: 11:44 PM
 */

class meta extends Tag{
    function __construct(array $attributes = [])
    {
        $meta_attributes = array("name"=>"" , "charset"=>"", "content"=>"", "http-equiv"=>"", "scheme"=>""); //HTML5 doesn't support "scheme"
        parent::__construct("meta", array_merge($attributes, $meta_attributes), true, false);
    }
}
