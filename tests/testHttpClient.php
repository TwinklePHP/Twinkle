<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 12:58
 */

require '../vendor/autoload.php';

$client = new \twinkle\client\Client('Http',"http://192.168.139.128:8888/testHttpService.php");
print_r($client->test(['a'=>'hello world']));
//print_r($client->test());