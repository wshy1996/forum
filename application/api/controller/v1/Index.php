<?php


namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\ID;

class Index extends BaseController
{
    public function index()
    {
        return md5(123456);
    }

}