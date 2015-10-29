<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller
{
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Fetch and display records
	 * @return void
	 */
	public function index() {
		// $this->load->model('user_m');
		// var_dump($this->user_m->hash('1111'));
	}

	/**
	 * Insert or update a record
	 * @param int $id Defaults to NULL
	 * @return void
	 */
	public function edit($id = NULL) {

	}

	/**
	 * Delete a record
	 * @param int $id
	 * @return void
	 */
	public function delete($id) {

	}

}