<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

use App\Api\Contracts\ApiContract;
use App\Sdk\OssSdk;

// oss上传图片授权
$router->get('oss/access/image', function (ApiContract $api) {

    // 示例化OssSdk
    $oss = new OssSdk('LTAIyF7hIj4LbaUA', 'Brr1rKq8kj6c2q5HA2WThQB5iSiJAa', 'https://hello1024.oss-cn-beijing.aliyuncs.com');

    // 生成文件保存地址
    $file_path = 'upload/' . date('Ymdhis') . uniqid();

    // 800k设置
    return $api->getMessage($oss->getAccessDatas(1024 * 800, 10, $file_path));
});