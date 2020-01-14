<?php
namespace jinyicheng\umeng_push\IOS;

use jinyicheng\umeng_push\IOSNotification;

class IOSGroupcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}
