<?php
namespace jinyicheng\umeng_push\IOS;

use jinyicheng\umeng_push\IOSNotification;

class IOSUnicast extends IOSNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}
