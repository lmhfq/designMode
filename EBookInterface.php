<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 15:24
 * project: test
 */

namespace designMode;


interface EBookInterface
{
    /**
     * 电子书翻页
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * 打开电子书
     *
     * @return mixed
     */
    public function pressStart();
}