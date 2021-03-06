<?php

use think\migration\Seeder;

class PermissionsMenusSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        \catcher\Utils::importTreeData($this->getPermissions(), 'permissions', 'parent_id');
    }

    protected function getPermissions()
    {
       return array (
  0 => 
  array (
    'id' => 1,
    'permission_name' => '权限管理',
    'parent_id' => 0,
    'level' => '',
    'route' => '/permissions',
    'icon' => 'el-icon-cpu',
    'module' => 'permissions',
    'creator_id' => 1,
    'permission_mark' => 'permission',
    'component' => 'layout',
    'redirect' => '/permissions/users',
    'hidden' => 1,
    'keepalive' => 1,
    'type' => 1,
    'sort' => 100,
    'created_at' => 1587461455,
    'updated_at' => 1599362429,
    'deleted_at' => 0,
    'children' => 
    array (
      0 => 
      array (
        'id' => 2,
        'permission_name' => '用户管理',
        'parent_id' => 1,
        'level' => '1',
        'route' => '/permissions/users',
        'icon' => 'el-icon-user',
        'module' => 'permissions',
        'creator_id' => 1,
        'permission_mark' => 'user',
        'component' => 'users',
        'redirect' => '',
        'hidden' => 1,
        'keepalive' => 1,
        'type' => 1,
        'sort' => 10,
        'created_at' => 1587461597,
        'updated_at' => 1599362429,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 3,
            'permission_name' => '列表',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@index',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461647,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 4,
            'permission_name' => '创建',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@create',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461696,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 5,
            'permission_name' => '保存',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@save',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461721,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 6,
            'permission_name' => '查看',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@edit',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461742,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          4 => 
          array (
            'id' => 7,
            'permission_name' => '更新',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@update',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461762,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          5 => 
          array (
            'id' => 8,
            'permission_name' => '删除',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@delete',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461841,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          6 => 
          array (
            'id' => 9,
            'permission_name' => '禁用',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@switchStatus',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461876,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
          7 => 
          array (
            'id' => 10,
            'permission_name' => '恢复',
            'parent_id' => 2,
            'level' => '1-2',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'user@recover',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461901,
            'updated_at' => 1599030266,
            'deleted_at' => 0,
          ),
        ),
      ),
      1 => 
      array (
        'id' => 11,
        'permission_name' => '角色管理',
        'parent_id' => 1,
        'level' => '1',
        'route' => '/permissions/roles',
        'icon' => 'el-icon-s-custom',
        'module' => 'permissions',
        'creator_id' => 1,
        'permission_mark' => 'role',
        'component' => 'roles',
        'redirect' => '',
        'hidden' => 1,
        'keepalive' => 1,
        'type' => 1,
        'sort' => 9,
        'created_at' => 1587461939,
        'updated_at' => 1599362438,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 12,
            'permission_name' => '列表',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@index',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587461984,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 13,
            'permission_name' => '创建',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@create',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462007,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 14,
            'permission_name' => '保存',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@save',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462021,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 15,
            'permission_name' => '查看',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@edit',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462040,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
          4 => 
          array (
            'id' => 16,
            'permission_name' => '更新',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@update',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462058,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
          5 => 
          array (
            'id' => 17,
            'permission_name' => '删除',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@delete',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462070,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
          6 => 
          array (
            'id' => 18,
            'permission_name' => '权限获取',
            'parent_id' => 11,
            'level' => '1-11',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'role@getPermissions',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462094,
            'updated_at' => 1599362438,
            'deleted_at' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'id' => 19,
        'permission_name' => '菜单管理',
        'parent_id' => 1,
        'level' => '1',
        'route' => '/permissions/rules',
        'icon' => 'el-icon-collection-tag',
        'module' => 'permissions',
        'creator_id' => 1,
        'permission_mark' => 'permission',
        'component' => 'rules',
        'redirect' => '',
        'hidden' => 1,
        'keepalive' => 1,
        'type' => 1,
        'sort' => 8,
        'created_at' => 1587462147,
        'updated_at' => 1599362475,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 20,
            'permission_name' => '列表',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@index',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462205,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 21,
            'permission_name' => '创建',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@create',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462232,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 22,
            'permission_name' => '保存',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@save',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462250,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 23,
            'permission_name' => '禁用/启用',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@show',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462273,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
          4 => 
          array (
            'id' => 24,
            'permission_name' => '更新',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@update',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462284,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
          5 => 
          array (
            'id' => 25,
            'permission_name' => '删除',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@delete',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462296,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
          6 => 
          array (
            'id' => 106,
            'permission_name' => '权限方法',
            'parent_id' => 19,
            'level' => '1-19',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'permission@getMethods',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1599221913,
            'updated_at' => 1599362475,
            'deleted_at' => 0,
          ),
        ),
      ),
      3 => 
      array (
        'id' => 26,
        'permission_name' => '部门管理',
        'parent_id' => 1,
        'level' => '1',
        'route' => '/permissions/departments',
        'icon' => 'el-icon-monitor',
        'module' => 'permissions',
        'creator_id' => 1,
        'permission_mark' => 'departments',
        'component' => 'departments',
        'redirect' => '',
        'hidden' => 1,
        'keepalive' => 1,
        'type' => 1,
        'sort' => 7,
        'created_at' => 1587462488,
        'updated_at' => 1599362429,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 27,
            'permission_name' => '列表',
            'parent_id' => 26,
            'level' => '1-26',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'department@index',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462529,
            'updated_at' => 1599030565,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 28,
            'permission_name' => '保存',
            'parent_id' => 26,
            'level' => '1-26',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'department@save',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462548,
            'updated_at' => 1599030565,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 29,
            'permission_name' => '更新',
            'parent_id' => 26,
            'level' => '1-26',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'department@update',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462579,
            'updated_at' => 1599030565,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 30,
            'permission_name' => '删除',
            'parent_id' => 26,
            'level' => '1-26',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'department@delete',
            'component' => '',
            'redirect' => '',
            'hidden' => 1,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462592,
            'updated_at' => 1599030565,
            'deleted_at' => 0,
          ),
        ),
      ),
      4 => 
      array (
        'id' => 31,
        'permission_name' => '岗位管理',
        'parent_id' => 1,
        'level' => '1',
        'route' => '/permissions/jobs',
        'icon' => 'el-icon-setting',
        'module' => 'permissions',
        'creator_id' => 1,
        'permission_mark' => 'job',
        'component' => 'jobs',
        'redirect' => '',
        'hidden' => 1,
        'keepalive' => 1,
        'type' => 1,
        'sort' => 1,
        'created_at' => 1587462707,
        'updated_at' => 1599362429,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 32,
            'permission_name' => '列表',
            'parent_id' => 31,
            'level' => '1-31',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'job@indexs',
            'component' => '',
            'redirect' => '',
            'hidden' => 2,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462757,
            'updated_at' => 1598959522,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 33,
            'permission_name' => '保存',
            'parent_id' => 31,
            'level' => '1-31',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'job@save',
            'component' => '',
            'redirect' => '',
            'hidden' => 2,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462774,
            'updated_at' => 1598959522,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 34,
            'permission_name' => '更新',
            'parent_id' => 31,
            'level' => '1-31',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'job@update',
            'component' => '',
            'redirect' => '',
            'hidden' => 2,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462785,
            'updated_at' => 1598959522,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 35,
            'permission_name' => '删除',
            'parent_id' => 31,
            'level' => '1-31',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'job@delete',
            'component' => '',
            'redirect' => '',
            'hidden' => 2,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462794,
            'updated_at' => 1598959522,
            'deleted_at' => 0,
          ),
          4 => 
          array (
            'id' => 36,
            'permission_name' => '获取全部',
            'parent_id' => 31,
            'level' => '1-31',
            'route' => '',
            'icon' => '',
            'module' => 'permissions',
            'creator_id' => 1,
            'permission_mark' => 'job@getAll',
            'component' => '',
            'redirect' => '',
            'hidden' => 2,
            'keepalive' => 1,
            'type' => 2,
            'sort' => 1,
            'created_at' => 1587462818,
            'updated_at' => 1598959522,
            'deleted_at' => 0,
          ),
        ),
      ),
    ),
  ),
);
    }
}
