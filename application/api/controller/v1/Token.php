<?php


namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\AppToken;
use app\api\service\AppToken as AppTokenService;

class Token extends BaseController
{
    /**
     * @param $ac
     * @param $se
     * @url api/:version.token/app
     * post
     * @return array
     */
    public function getAPPToken($ac,$se)
    {
        (new AppToken())->goCheck();
        $token = (new AppTokenService())->getAppToken($ac,$se);
        return ['token' => $token];


    }
}