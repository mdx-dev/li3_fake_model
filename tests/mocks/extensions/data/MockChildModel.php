<?php

namespace li3_fake_model\tests\mocks\extensions\data;

use li3_fake_model\extensions\data\Model;

class MockChildModel extends Model {

	public $hasMany = array(
		'MockGrandchildModel' => array(
			'to'        => 'li3_fake_model\tests\mocks\extensions\data\MockGrandchildModel',
			'key'       => array('_id' => 'parent_id'),
			'fieldName' => 'children',
		),
	);

}