<?php defined("BASEPATH") OR exit("No direct script access allowed");
require_once realpath(__DIR__ . '/../../../helpers/middleware.php');
class Ahp extends CI_Controller 
{
    public function __construct() {
		parent::__construct();
		$this->load->model('ahp_model');

        middleware_check_user($this);
    }

  
    public function index(){
      $algoritma = $this->ahp_model->getAll();
      $data['algoritma'] = $algoritma;
        $this->load->view("include/head");
        $this->load->view("include/top-header");
        // $this->load->view('ahp_view');
        $this->load->view('ahp_view', $data);
        $this->load->view("include/admin/sidebar");
        $this->load->view("include/panel");
        $this->load->view("include/footer");
        $this->load->view("include/alert");
    }
   
    
}
