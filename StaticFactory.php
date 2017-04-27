<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 15:39
 * project: test
 */

namespace designMode;


class StaticFactory
{
    /**
     * 通过传入参数创建相应对象实例
     *
     * @param string $type
     *
     * @static
     *
     * @throws \InvalidArgumentException
     * @return FormatterInterface
     */

    public static $typeList = [
        'FormatNumber' => __NAMESPACE__ . '\FormatNumber'
    ];

    public static function factory($type)
    {

        if (!array_key_exists($type, static::$typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = static::$typeList[$type];

        return new $className();
    }
}