<?php


namespace app\api\validate;


use app\lib\exception\ParamsException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if (!$result){
            throw new ParamsException(['msg'=>$this->error]);
        }else{
            return true;
        }
    }

}