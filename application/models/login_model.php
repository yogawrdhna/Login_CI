<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    public function cek_login($where)
    {
       $query = $this->db->get_where('users', $where)->num_rows();
        return $query;
    }
    
   

}



/* End of file ModelName.php */


?>