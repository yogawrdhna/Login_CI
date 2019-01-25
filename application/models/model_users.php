<?php 


defined('BASEPATH') OR exit('No direct script access allowed');



class model_users extends CI_Model
{
    public function insertUsers()
    {
        //insert data
        $data = array(
            'username' => $this->input->post('username'),
            // 'fname' => $this->input->post('fname'),
            // 'email' => $this->input->post('email'),
            // 'contact' => $this->input->post('contact'),
            // 'nis' => $this->input->post('nis'),
            'password' => $this->input->post('password')
        ); 

        //insert data to the database
        $this->db->insert('users', $data);
    }

    public function Checklogin()
    {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if($result->num_rows() == 1)
        {
            return $result->result();
        }
        else {
            return false;
        }
    }


}





?>