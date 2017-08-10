<?php
	/**
	 * Created by PhpStorm.
	 * User: michael
	 * Date: 8/8/17
	 * Time: 10:02 PM
	 */

class body extends Tag {

	function __construct(array $attributes = [], array $contains = []) {
		$body_attributes = array("alink"=>"", "background"=>"", "bgcolor"=>"", "bottommargin"=>"", "leftmargin"=>"", "link"=>"",
			"onafterprint"=>"", "onbeforeprint"=>"", "onbeforeunload"=>"", "onblur"=>"", "onerror"=>"", "onfocus"=>"",
			"onhashchange"=>"", "onlanguagechange"=>"", "onload"=>"", "onmessage"=>"", "onoffline"=>"", "online"=>"",
			"onpopstate"=>"", "onredo"=>"", "onresize"=>"", "onstorage"=>"", "onundo"=>"", "onunload"=>"",
			"rightmargin"=>"", "text"=>"", "topmargin"=>"", "vlink"=>"");
		parent::__construct('body', array_merge($attributes, $body_attributes), false, true, $contains);
	}

}