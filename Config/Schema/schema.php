<?php
/**
 * CakePHP Ratings
 *
 * Copyright 2009 - 2010, Cake Development Corporation
 *                        1785 E. Sahara Avenue, Suite 490-423
 *                        Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright 2009 - 2010, Cake Development Corporation
 * @link      http://github.com/CakeDC/Ratings
 * @package   plugsin.ratings
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * @package		ratings
 * @subpackage	config.schema
 */

class RatingsSchema extends CakeSchema {

/**
 * Schema name
 *
 * @var string
 * @access public
 */
	public $name = 'Ratings';

/**
 * Before callback
 *
 * @return boolean
 * @access public
 */
	public function before($event = array()) {
		return true;
	}

/**
 * After callback
 *
 * @return void
 * @access public
 */
	public function after($event = array()) {
	}

/**
 * Schema for ratings table
 *
 * @var array
 * @access public
 */
	public $ratings = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'parent_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'foreign_key' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'value' => array('type' => 'float', 'null' => true, 'default' => '0', 'length' => '8,4'),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'review' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'count' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'data' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'UNIQUE_RATING' => array('column' => array('user_id', 'foreign_key', 'model'), 'unique' => 0)
		)
	);
}
?>