<?php 

class Member_model extends CI_Model {


	public function addmember()
	{
       
		$data = array(
            'm_fname' => $this->input->post('m_fname'),
            'm_lname' => $this->input->post('m_lname'),
            'age' => $this->input->post('age')
        );

        $query = $this->db->insert('member', $data);

        if($query){
            echo "<script type='text/javascript'>alert('Insert Data Successfully');</script>";
            redirect('', 'refresh');
            
        }else{
            echo "<script type='text/javascript'>alert('Please, Try again!');</script>";
            redirect('', 'refresh');
        }
    }

    public function editmember()
	{
       
		$data = array(
            'm_fname' => $this->input->post('m_fname'),
            'm_lname' => $this->input->post('m_lname'),
            'age' => $this->input->post('age')
        );

        $this->db->where('m_id', $this->input->post('m_id'));
        $query = $this->db->update('member', $data);

        if($query){
            echo "<script type='text/javascript'>alert('Update Data Successfully');</script>";
            redirect('', 'refresh');
            
        }else{
            echo "<script type='text/javascript'>alert('Please, Try again!');</script>";
            redirect('', 'refresh');
        }
    }



    public function showdata(){


        $query = $this->db->get('member');
        return $query->result();
    }

    public function read($m_id){
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('m_id', $m_id);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function deldata($m_id){
        $this->db->delete('member', array('m_id'=>$m_id));
        redirect('', 'refresh');
    }
}



