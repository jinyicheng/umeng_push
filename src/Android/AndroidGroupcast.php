<?php
namespace jinyicheng\umeng_push\Android;

use jinyicheng\umeng_push\AndroidNotification;

class AndroidGroupcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}
