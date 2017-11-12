<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 10:18
 */

require '../vendor/autoload.php';

$client = new \twinkle\client\Client('Yar',"http://192.168.139.128:8888/testYarService.php");
print_r($client->test('hello world'));
print_r($client->test());