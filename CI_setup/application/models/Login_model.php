<?php
class Login_model extends CI_Model{
    public function check_user($user_id,$password){
        $this->db->select('*');
        $this->db->from('user_details');
        $this->db->where('user_id', $user_id);
        $this->db->where('password', $password);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
        else
            return 0;
    }
}