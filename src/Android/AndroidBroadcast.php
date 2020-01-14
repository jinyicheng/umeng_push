<?php
namespace jinyicheng\umeng_push\Android;

use jinyicheng\umeng_push\AndroidNotification;

class AndroidBroadcast extends AndroidNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "broadcast";
	}
}
