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
    public function getUserByEmail($email){
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0)?$query->row():FALSE;
    }
    public function isExist($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0)?TRUE:FALSE;
    }
    public function verifyUser($email, $password){
    	
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');
        return ($query->num_rows() > 0)?TRUE:FALSE;
    }


}