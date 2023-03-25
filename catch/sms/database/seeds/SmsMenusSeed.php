<?php


use think\migration\Seeder;

class SmsMenusSeed extends Seeder
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
    'id' => 83,
    'permission_name' => '短信管理',
    'parent_id' => 0,
    'level' => '',
    'route' => '/sms',
    'icon' => 'MessageBox',
    'module' => 'sms',
    'permission_mark' => 'sms',
    'component' => 'layout',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1600229598,
    'updated_at' => 1679124856,
    'deleted_at' => 0,
  ),
  1 => 
  array (
    'id' => 84,
    'permission_name' => '短信配置',
    'parent_id' => 83,
    'level' => '83',
    'route' => '/sms/config',
    'icon' => 'Message',
    'module' => 'sms',
    'permission_mark' => 'sms',
    'component' => '/sms/config/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 1,
    'creator_id' => 1,
    'created_at' => 1600229654,
    'updated_at' => 1679125044,
    'deleted_at' => 0,
  ),
  2 => 
  array (
    'id' => 85,
    'permission_name' => '短信模板',
    'parent_id' => 83,
    'level' => '83',
    'route' => '/sms/template',
    'icon' => 'Checked',
    'module' => 'sms',
    'permission_mark' => 'sms/template',
    'component' => '/sms/template/index',
    'redirect' => '',
    'type' => 1,
    'is_link' => 0,
    'is_full' => 0,
    'is_hidden' => 0,
    'is_affix' => 0,
    'is_keepalive' => 1,
    'sort' => 100,
    'creator_id' => 1,
    'created_at' => 1679644285,
    'updated_at' => 1679644285,
    'deleted_at' => 0,
  ),
);
    }
}
