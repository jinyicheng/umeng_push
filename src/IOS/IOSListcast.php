<?php

namespace jinyicheng\umeng_push\IOS;

use jinyicheng\umeng_push\IOSNotification;

class IOSListcast extends IOSNotification
{
    function __construct()
    {
        parent::__construct();
        $this->data["type"] = "listcast";
        $this->data["device_tokens"] = NULL;
    }

}
