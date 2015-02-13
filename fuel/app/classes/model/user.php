<?php

class Model_User extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'name',
		'nick',
		'gid',
		'email',
	);

	protected static $_observers = array(
	);

	protected static $_table_name = 'users';

}
