<?php 

    
defined('BASEPATH') OR exit ('no Direct Script access allowed');


class login_controllers extends CI_Controller
{
    public function index()
    {   
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

    
        if ($this->form_validation->run() == FALSE) {
           
        // $data['title'] = 'login';

        $this->load->view('login_view.php');
        }
         else{
            $this->load->model('model_users');

            $cek = $this->model_users->Checklogin();

            if($cek != FALSE)
            {
                //set session
                $username = $_POST['username'];
                $password = $_POST['password'];

                //jupuk data tekan database
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where(array('username' => $username , 'password' => $password));
                $query = $this->db->get();

                $user = $query->row();

                if($user->username){
                    $this->session->set_flashdata('iso', 'masuk');

                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $user->username;

                    //dilempar kehalaman user setelah login
                    // $this->load->view('home/iso', 'refresh')
                    redirect('home/iso');
                    
                }
            }else{
                $this->session->set_flashdata('error', 'gaiso masuk');
                
                redirect('home/index');
            }
        }
    }
} 
?>