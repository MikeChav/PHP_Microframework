<?php
/**
 * Created by IntelliJ IDEA.
 * User: YawoSiatitse
 * Date: 8/9/2017
 * Time: 11:39 PM
 */

class head extends Tag
{
    function __construct( array $contains = [])
    {
        parent::__construct("head", $attributes, false, true, $contains);
    }
}