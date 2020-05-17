<?php

use think\migration\Migrator;
use think\migration\db\Column;

class DianTi extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table  =  $this->table('xq_dianti',array('engine'=>'Innodb', 'comment' => '电梯', 'signed' => false));
        $table->addColumn('name', 'string',array('limit'  =>  100,'default'=>'','comment'=>'电梯名称'))
            ->addColumn('xiaoqu_id', 'integer',array('limit'  =>  10, 'comment'=>'小区ID'))
            ->addColumn('address', 'string',['limit'  =>  200, 'default' => '', 'comment'=>'电梯地址'])
            ->addColumn('status', 'boolean',array('limit'  =>  1,'default'=> 1,'comment'=>'用户状态 1 正常 2 禁用'))
            ->addColumn('created_at', 'integer', array('default'=>0,'comment'=>'创建时间', 'signed' => false ))
            ->addColumn('updated_at', 'integer', array('default'=>0,'comment'=>'更新时间', 'signed' => false))
            ->addColumn('deleted_at', 'integer', array('default'=>0,'comment'=>'删除状态，0未删除 >0 已删除', 'signed' => false))
            ->create();
    }
}
