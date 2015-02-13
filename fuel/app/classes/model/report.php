<?php

class Model_Report extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'uid',
		'date',
		'report',
	);


	protected static $_table_name = 'reports';

}
