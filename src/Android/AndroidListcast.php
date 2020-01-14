<?php
namespace jinyicheng\umeng_push\Android;

use jinyicheng\umeng_push\AndroidNotification;

class AndroidListcast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "listcast";
		$this->data["device_tokens"] = NULL;
	}

}
