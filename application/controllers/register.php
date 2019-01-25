<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class register extends CI_Controller
    {
        public function RegisterUser()
        {
            $this->form_validation->set_rules('username', 'Username', 'required');
            // $this->form_validation->set_rules('fname', 'Full name', 'required');
            // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            // $this->form_validation->set_rules('contact', 'Contact', 'required');
            // $this->form_validation->set_rules('nis', 'NIS', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            // $this->form_validation->set_rules('cpassword', 'Confirm password', 'required|matches[password]');

            
            if ($this->form_validation->run() == TRUE) {
                # code...

                $this->load->model('model_users');
                $this->model_users->insertUsers();

                $this->session->set_flashdata('succes', 'ya');
                
                redirect('Home/login');
                
            } else {

                $this->load->view('register_view');
                # code...
            }
            
            
        }





    }
    

?>