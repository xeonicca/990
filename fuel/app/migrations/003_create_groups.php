<?php

namespace Fuel\Migrations;

class Create_groups
{
	public function up()
	{
		\DBUtil::create_table('groups', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 100, 'type' => 'varchar', 'null' => false),
			'position' => array('constraint' => 11, 'type' => 'int', 'default' => 0),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('groups');
	}
}