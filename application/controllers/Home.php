<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('member_model');
    }

	public function index()
	{
        $data['query'] = $this->member_model->showdata();
		$this->load->view('index_view', $data);
	}

    
}
