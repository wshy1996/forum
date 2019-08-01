<?php


namespace app\api\model;


class ThirdApp extends BaseModel
{
    protected $hidden = ['create_time','update_time','delete_time'];
    public static function check($ac,$se)
    {
        return self::where(['ac'=>$ac,'se'=>md5($se)])->find();
    }

}