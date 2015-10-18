<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['main'] = "content/content";
        //$data['content'] = $this->content->get_content();
        $this->load->view('static/template', $data);
    }
}
