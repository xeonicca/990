<?php

class Model_Group extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'position',
	);

	protected static $_observers = array(
	);

	protected static $_table_name = 'groups';

}
