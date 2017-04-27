<?php
/**
 *
 * Created by PhpStorm.
 * @author <qiufeng> (991564110@qq.com)
 * @date: 2017/4/8 14:06
 * project: test
 */

namespace designMode;


class Invoker
{
    /**
     * @var CommandInterface
     */
    protected $command;
    /**
     * @var array
     */
    protected $commandList = [
        Receiver::class
    ];

    /**
     * 在调用者中我们通常可以找到这种订阅命令的方法
     *
     * @param CommandInterface $cmd
     */
    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * 执行命令
     */
    public function run()
    {
        $this->command->execute();
    }


    /**
     * @return array
     */
    public function getCommandList()
    {
        return $this->commandList;
    }
}