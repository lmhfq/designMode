<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 14:05
 * project: test
 */

namespace designMode;


interface CommandInterface
{
    /**
     * 在命令模式中这是最重要的方法,
     * Receiver在构造函数中传入.
     */
    public function execute();
}