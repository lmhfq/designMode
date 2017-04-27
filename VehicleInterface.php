<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 15:59
 * project: test
 */

namespace designMode;


interface VehicleInterface
{
    /**
     * 设置车的颜色
     *
     * @param string $rgb
     */
    public function setColor($rgb);
}