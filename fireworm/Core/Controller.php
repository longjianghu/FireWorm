<?php
// +----------------------------------------------------------------------
// | Fireworm [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.sohocn.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://opensource.org/licenses/MIT )
// +----------------------------------------------------------------------
// | Author: longjianghu <215241062@qq.com>
// +----------------------------------------------------------------------

//----------------------------------
// 控制器
//----------------------------------

namespace Fireworm\Core;

class Controller
{
    public $request;

    /**
     * 初始化.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->request = new Request();
    }
}