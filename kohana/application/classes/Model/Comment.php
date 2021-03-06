<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Maxx
 * Date: 21.05.13
 * Time: 19:17
 * To change this template use File | Settings | File Templates.
 */

class Model_Comment extends ORM {
	protected $_table_name = 'comment';
	protected $_belongs_to = array('blog'=>array('model'=>'blog'));


	public function rules()
	{
		return array(
			'user' => array(
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 60))
			),
			'comment' => array(
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 500))
			)
		);
	}
}