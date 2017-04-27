<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 14:34
 * project: test
 */

namespace designMode;

class LogService implements LogServiceInterface
{
    public function log(){
        echo 'log--------------------------';
    }
}