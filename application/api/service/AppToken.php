<?php


namespace app\api\service;


use app\api\model\ThirdApp as UserModel;
use app\lib\exception\TokenException;

class AppToken extends Token
{
    public function getAppToken($ac,$se)
    {
        $app = UserModel::check($ac,$se);
        if (!$app){
            throw new TokenException(['msg'=>'授权失败']);
        }else{
            $cacheData = [
                'uid' => $app->id,
                'scope' => ''
            ];
            $token = $this->saveCache($cacheData);
            return $token;
        }
    }

}