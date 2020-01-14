<?php
namespace jinyicheng\umeng_push\Android;

use jinyicheng\umeng_push\AndroidNotification;

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}
