<?php


namespace app\api\service;


use app\lib\exception\TokenException;

class Token
{
    protected function generateToken()
    {
        $randChar = getRandChars();
        $tokenSalt = config('setting.token_salt');
        $timeStamp =$_SERVER['REQUEST_TIME'];
        return md5($randChar.$timeStamp.$tokenSalt);
    }
    protected function saveCache($value)
    {
        $token = $this->generateToken();
        $expire_in = config('setting.expire_in');
        $result = cache($token,json_encode($value),$expire_in);
        if (!$result){
            throw new TokenException([
                'msg' => '服务器缓存异常'
            ]);
        }
        return $token;
    }

}