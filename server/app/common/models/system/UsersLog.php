<?php
// +----------------------------------------------------------------------
// | A3Mall
// +----------------------------------------------------------------------
// | Copyright (c) 2020 http://www.a3-mall.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xzncit <158373108@qq.com>
// +----------------------------------------------------------------------
namespace app\common\models\system;

use app\common\models\Model;

class UsersLog extends Model {

    protected $name = "system_users_log";

    public function getTimeAttr($value){
        return date("Y-m-d H:i:s",$value);
    }

}