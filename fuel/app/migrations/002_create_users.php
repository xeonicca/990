<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar', 'default' => ''),
			'nick' => array('constraint' => 100, 'type' => 'varchar', 'default' => ''),
			'gid' => array('constraint' => 11, 'type' => 'int', 'default' => null, 'null' => true),
			'email' => array('constraint' => 200, 'type' => 'varchar', 'default' => ''),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}