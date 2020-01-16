<?php

namespace jinyicheng\umeng_push\IOS;

use jinyicheng\umeng_push\IOSNotification;

class IOSBroadcast extends IOSNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "broadcast";
    }
}
