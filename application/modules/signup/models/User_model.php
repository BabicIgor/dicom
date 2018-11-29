<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Pages Model
 */
class User_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
	public function add_new_user($username, $email, $password, $token){
        $data['username'] = $username;
        $data['email'] = $email;
        $data['password'] = $password;
        $data['verify_token'] = $token;
        $data['is_verified'] = 0;
        return ($this->db->insert('users',$data))? $this->db->insert_id() : FALSE;
    }
    
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return trim($randomString);
    }
    public function add_new_user_by_institution($email, $institution, $role){
        
        $data['password'] = 'password';
        $data['email'] = $email;
        $data['institution_id'] = $institution;
        $data['is_verified'] = 1;
        
        $this->db->where('role_type', $role);
        $query = $this->db->get('role');
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            $data['role'] = $row->role_id;
        }
        else
        {
            $row = [];
            $data['role'] = $row->role_id;
        }
        
        return ($this->db->insert('users',$data))? $this->db->insert_id() : FALSE;
    }
    public function add_new_user_by_doctor($email, $institution, $role){
        
        $data['password'] = 'password';
        $data['email'] = $email;
        $data['institution_id'] = $institution;
        $data['is_verified'] = 1;
        
        
        $this->db->where('role_type', $role);
        $query = $this->db->get('role');
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            $data['role'] = $row->role_id;
        }
        else
        {
            $row = [];
            $data['role'] = $row->role_id;
        }
        
        
        return ($this->db->insert('users',$data))? $this->db->insert_id() : FALSE;
        
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
    public function setCheckVerify($boolean)
    {
        $this->db->where('verify_token', $email);

        if($boolean)
        {
            $data['text'] = $comment;
            $data['version_id'] = $version;
            return ($this->db->insert('comment',$data))? $this->db->insert_id() : FALSE;
        }
        else
        {
            
        }
    }
    public function verifyToken($token)
    {
        $this->db->where('verify_token', $token);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0)
        {
            
            $this->db->where('verify_token', $token);
            $data['is_verified'] = 1;
            $this->db->update('users',$data);
            return true;
        }
        else
        {
            return false;
        }
    }


}