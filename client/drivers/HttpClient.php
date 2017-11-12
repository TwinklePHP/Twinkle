<?php
/**
 * Created by PhpStorm.
 * User: huanjin
 * Date: 2017/11/12
 * Time: 11:42
 */

namespace twinkle\client\drivers;


class HttpClient extends BaseClient
{
    function init($serviceUrl)
    {
        $this->_client = curl_init();
        curl_setopt($this->_client, CURLOPT_URL, $serviceUrl);
        curl_setopt($this->_client, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->_client, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($this->_client, CURLOPT_TIMEOUT, 30);
        $ssl = substr($serviceUrl, 0, 8) == "https://" ? TRUE : FALSE;
        if ($ssl) {
            curl_setopt($this->_client, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($this->_client, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($this->_client, CURLOPT_SSL_VERIFYHOST, false);
        }
        curl_setopt($this->_client, CURLOPT_CUSTOMREQUEST, 'POST');
    }

    /**
     * @param $name
     * @param array $args
     * @return array
     */
    public function __call($name, $args = [])
    {
        $args['method'] = $name;
        curl_setopt($this->_client, CURLOPT_POSTFIELDS, json_encode($args));
        //加载头文件
        if (!empty ($headers)) {
            curl_setopt($this->_client, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        }
        $backData ['data'] = curl_exec($this->_client);var_dump($backData ['data']);
        $backData ['httpcode'] = curl_getinfo($this->_client, CURLINFO_HTTP_CODE);
        curl_close($this->_client);
        return json_decode($backData['data'],true);
    }
}