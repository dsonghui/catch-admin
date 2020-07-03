<?php

use think\migration\Migrator;
use think\migration\db\Column;

class DianTiPost extends Migrator
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
    public function change() {
        $table = $this->table('xq_dianti_post', array('engine' => 'Innodb', 'comment' => '电梯信息', 'signed' => false));
        $table->addColumn('title', 'string', array('limit' => 100, 'default' => '', 'comment' => '标题'))
            ->addColumn('type', 'integer', array('limit' => 2, 'default' => 0, 'comment' => '信息类型 1证件 2 维保 3 维修 4 其他'))
            ->addColumn('xq_dianti_id', 'integer', array('limit' => 2, 'default' => 0, 'comment' => '电梯ID'))
            ->addColumn('cover', 'string', ['limit' => 100, 'default' => '', 'comment' => '封面图片'])
            ->addColumn('desc', 'string', ['limit' => 2000, 'default' => '', 'comment' => '内容简介'])
            ->addColumn('content', 'text', ['comment' => '文字内容'])
            ->addColumn('status', 'boolean', array('limit' => 1, 'default' => 0, 'comment' => '用户状态 1 已发布 0 未发布'))
            ->addColumn('sort', 'integer', array('default' => 0, 'comment' => '排序'))
            ->addColumn('more', 'text', array('comment' => '扩展属性,如缩略图;格式为json'))
            ->addColumn('created_at', 'integer', array('default' => 0, 'comment' => '创建时间', 'signed' => false))
            ->addColumn('updated_at', 'integer', array('default' => 0, 'comment' => '更新时间', 'signed' => false))
            ->addColumn('deleted_at', 'integer', array('default' => 0, 'comment' => '删除状态，0未删除 >0 已删除', 'signed' => false))
            ->create();
    }
}
