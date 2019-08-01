<?php


namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 200;
    public $msg = 'token过期或无效';
    public $errorCode = 10003;

}