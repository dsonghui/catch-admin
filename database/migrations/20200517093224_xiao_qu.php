<?php

use think\migration\Migrator;
use think\migration\db\Column;

class XiaoQu extends Migrator
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
        $table = $this->table('xiaoqu', array('engine' => 'Innodb', 'comment' => '小区列表', 'signed' => false));
        $table->addColumn('name', 'string', array('limit' => 15, 'default' => '', 'comment' => '小区名称'))
            ->addColumn('shou_zi_mu', 'string', array('limit' => 2, 'default' => '', 'comment' => '首字母'))
            ->addColumn('bian_hao', 'string', array('limit' => 100, 'default' => '', 'comment' => '小区编号'))
            ->addColumn('address', 'string', ['limit' => 200, 'default' => '', 'comment' => '小区地址'])
            ->addColumn('creator_id', 'integer', ['default' => 0, 'comment' => '创建人ID'])
            ->addColumn('status', 'boolean', array('limit' => 1, 'default' => 1, 'comment' => '用户状态 1 正常 2 禁用'))
            ->addColumn('sort', 'integer', array('default' => 0, 'comment' => '排序'))
            ->addColumn('created_at', 'integer', array('default' => 0, 'comment' => '创建时间', 'signed' => false))
            ->addColumn('updated_at', 'integer', array('default' => 0, 'comment' => '更新时间', 'signed' => false))
            ->addColumn('deleted_at', 'integer', array('default' => 0, 'comment' => '删除状态，0未删除 >0 已删除', 'signed' => false))
            ->create();
    }
}
