<?php 

class home extends CI_Controller {

    public function index()
    {
        $this->load->view('login_view');
    }
    public function register()
    {
        $this->load->view('register_view');
    }
    public function iso()
    {
        $this->load->view('user_view');
    }
    public function login()
    {
        $this->load->view('login_view');
        
    }

}
?>