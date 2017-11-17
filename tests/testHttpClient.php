<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 12:58
 */

require '../vendor/autoload.php';

$client = new \twinkle\client\Client('Http',"http://127.0.0.1:8899/testHttpService.php");
print_r($client->test('hello world'));
