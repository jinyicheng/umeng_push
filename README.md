# 友盟推送支持thinkphp6.*

## 安装
```php
    composer require jinyicheng/umeng_push   
```
  
## thinkphp6.* 配置
安装后复制vendor/jinyicheng/umeng_push/install文件下的umeng_push.php到thinkphp6项目config目录下并修改配置参数

```php
<?php

return [
    'ios_app_key' => '',
    'ios_app_master_secret' => '',
    'android_app_key' => '',
    'android_app_master_secret' => '',
    'production_mode' => env('UMENG_MODE', false)
];

```

生成配置文件:

```php
    php think vendor:publish   
```

在配置文件umeng_push.php中填入appkey以及master_secret既可完成配置

## 用法

Android用法:
```php

    use jinyicheng\umeng_push;
    
    $device_token = 'xxxx';
    $predefined = array('ticker' => 'android ticker' ,...);
    $extraField = array(); //other extra filed
    Umeng::android()->sendUnicast($device_token,$predefined,$extraField); //单播

```

IOS用法:

```php
    
    use jinyicheng\umeng_push;
    
    $device_token = 'xxxx';
    $predefined = array('alert' => 'ios alert' ,...);
    $customField = array(); //other custom filed
    Umeng::ios()->sendUnicast($device_token,$predefined,$customField); //单播
    
```

## Api

说明: Android API跟 IOS一样

```php
    
    sendBroadcast($predefined = [], $extraField = []); //广播
    sendUnicast($device_tokens = '', $predefined= [], $extraField = []); //单播
    sendListcast($device_tokens = '', $predefined= [], $extraField = []); //列播
    sendFilecast($fileContents = '', $predefined= [],$extraField = []); //文件播
    sendGroupcast($filter = [], $predefined= [], $extraField = []); //组播
    sendCustomizedcast($alias = '', $alias_type = '', $predefined= [], $extraField = []); //自定义播,通过alias
    sendCustomizedcastFileId($file_contents = '', $predefined= [], $extraField = []); //自定义播,通过file_id
    
```

## Exception

程序不处理异常,可根据业务情况自行处理, 若抛出异常,可通过 `e->getHttpCode()` 获取http状态码, 通过 `e->getErrCode()`获取umeng返回的错误码.
使用过程中若出错,可自行查看Laravel或Lumen的Log日志# umeng

