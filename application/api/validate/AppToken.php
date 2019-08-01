<?php


namespace app\api\validate;


class AppToken extends BaseValidate
{
    protected $rule = [
        'ac' => 'require|chsAlpha',
        'se' => 'require|alphaNum'
    ];

}