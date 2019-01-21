<?php
/**
 * Created by PhpStorm.
 * User: zhangwenzong
 * Date: 2019/1/21
 * Time: 11:10
 */
namespace AuthenticationOauth\V20190121;
use core\Profile\RequestInteface;

class RefreshToken implements RequestInteface
{
    /**
     * @var string
     */
    protected $method = 'POST';
    protected $url = 'https://ad.toutiao.com/open_api/oauth2/refresh_token/';

    public function getMethod()
    {
        return $this->method;
    }

    public function getUrl()
    {
        return $this->url;
    }
}
