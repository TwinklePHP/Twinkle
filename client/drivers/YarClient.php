<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 11:42
 */

namespace twinkle\client\drivers;


class YarClient extends BaseRpcClient
{

    function init($serviceUrl)
    {
        $this->_client = new \Yar_Client($serviceUrl);
    }
}