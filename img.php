<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 8/8/17
 * Time: 10:53 PM
 */

class img extends Tag{
	
	function __construct(array $attributes = []) {
		//crossorigin = anonymous|use-credentials
		//ismap only allowed if parent is <a>
		//usemap: You cannot use this attribute if the <img> element is a descendant of an <a> or <button> element.
		$img_attributes = array("alt"=> "", "crossorigin"=> "", "height"=> "", "ismap"=> "", "longdesc"=> "",
			"referrerpolicy"=> "", "sizes"=> "", "src"=> "", "srcset"=> "", "width"=> "", "usemap"=> "", "vspace"=> "");
		parent::__construct('img', array_merge($attributes, $img_attributes), true, false);
	}

}