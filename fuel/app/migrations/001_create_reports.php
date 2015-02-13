<?php

namespace Fuel\Migrations;

class Create_reports
{
	public function up()
	{
		\DBUtil::create_table('reports', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'uid' => array('constraint' => 11, 'type' => 'int'),
			'date' => array('constraint' => 11, 'type' => 'int'),
			'report' => array('constraint' => 5000, 'type' => 'varchar', 'default' => ''),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reports');
	}
}