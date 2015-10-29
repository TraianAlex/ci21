<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Test extends MY_Model 
{
	protected $_table_name = 'test'; // table name
	protected $_primary_key = 'id'; // Delete this if value is 'id'
	protected $_primary_filter = 'intval'; // Delete this if value is 'intval'
	protected $_order_by = '';
	protected $_timestamps = FALSE; // Delete this if value is FALSE
	public $rules = array(
		'some_field' => array(
			'field' => '',
			'label' => '',
			'rules' => 'trim',
		),
	);

	public function __construct() {
		parent::__construct();
	}

}