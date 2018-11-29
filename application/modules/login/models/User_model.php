<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Pages Model
 */
class User_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    public function add_new_user($username, $email, $password){
        $data['username'] = $username;
        $data['email'] = $email;
        $data['password'] = $password;
        return ($this->db->insert('users',$data))? $this->db->insert_id() : FALSE;
    }

    public function verifyUser($email, $password){
    	
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->where('is_verified', 1);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0)?$query->row():FALSE;
    }
    
    
    
    public function getUserNameByUserID($row_id)
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `users` a LEFT JOIN `physician` b ON a.`user_id` = b.`physician_user_id` WHERE a.`user_id` = '.$row_id);
        
        $row = $query->row();
        if (sizeof($row) > 0) {
            return $row;
        } else {
            return [];
        }
    }
    
    
    
	public function getUserInfo($id){
    	
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0)?$query->row():FALSE;
    }


}