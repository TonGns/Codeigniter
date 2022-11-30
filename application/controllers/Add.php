<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('member_model');
    }

	public function index()
	{

        $this->load->view('add_view');
	}

    public function edit($m_id)
	{
        $data['query'] = $this->member_model->read($m_id);
        $this->load->view('edit_view', $data);
	}

    public function adding(){
        
        $this->member_model->addmember();
    }

    public function editdata(){
        
        $this->member_model->editmember();
    }

    public function del($m_id){
        
        $this->member_model->deldata($m_id);
    }
}
