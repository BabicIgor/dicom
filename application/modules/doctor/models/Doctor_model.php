<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Doctor_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    
    
    public function delete_doctor_by_rowid($row_id)
    {
		$this->db->where('physician_id', $row_id);
		$query = $this->db->get('physician');
        if($query->num_rows() > 0)
        {
            $row = $query->row();
        }
        $deleting_user_id = $row->physician_user_id;
		
		$this->db->where('user_id', $deleting_user_id);
		$this->db->delete('users');
		
		$this->db->where('physician_id', $row_id);
		$this->db->delete('physician');
		
		
		
    }
    
    public function get_doctors_by_row($row_id)
    {
        $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as phy_email FROM `physician` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE a.`physician_id` = '.$row_id);
        
        
        $row = $query->row();
        if (sizeof($row) > 0) {
            
            $arrDob = explode("-", $row->dob);
            $row->dob = $arrDob[1]."/".$arrDob[2]."/".$arrDob[0];
            
            
            
            return $row;
        } else {
            return [];
        }
    }
    
    
    
    
    public function get_doctors_for_chat($userID)
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `users` a LEFT JOIN `physician` b ON a.`user_id` = b.`physician_user_id` WHERE b.`physician_type` = "doctor" AND a.`user_id` != '.$userID);
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    
    
    
    
    public function get_doctors_by_facility($institution_id = null)
    {
        $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as phy_email FROM `physician` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE c.`institution_id` = '.$institution_id.' AND a.`physician_type` = "doctor"');
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    
    
    
    
    public function get_doctors($institution_id = null)
    {
        
        
        if($institution_id == null)
        {
            
            $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as phy_email FROM `physician` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE a.`physician_type` = "doctor"');
            $query_result = $query->result();
            if (sizeof($query_result) > 0) {
                return $query->result();
            } else {
                return [];
            }
            
        }
        else
        {
            
            $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as phy_email FROM `physician` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE c.`institution_id` = '.$institution_id.' AND a.`physician_type` = "doctor"');
            $query_result = $query->result();
            if (sizeof($query_result) > 0) {
                return $query->result();
            } else {
                return [];
            }
            
        }
    }
    public function update_physician_user_id($physician_id, $user_id)
    {
        $this->db->where('physician_id', $physician_id);
        $data['physician_user_id'] = $user_id;
        return $this->db->update('physician',$data);
        
    }
    public function update_doctor($param_data)
    {
        

        
        $data['first_name'] = $param_data['fname'];
        $data['last_name'] = $param_data['lname'];
        $data['profile_type'] = $param_data['profiletype'];
        $data['institution'] = $param_data['institution'];
        
        
        $arrDob = explode("/", $param_data['dob']);
        
        
        $data['dob'] = $arrDob[2]."-".$arrDob[0]."-".$arrDob[1];
        $data['gender'] = $param_data['gender'];
        $data['specialization'] = $param_data['specialization'];
        $data['phone_number'] = $param_data['phone'];
        $data['email'] = $param_data['email'];
        $data['department'] = $param_data['department'];
        
        
        $this->db->where('address_id', $param_data['address_id']);
        $data_address_tbl['address_one'] = $param_data['address1'];
        $data_address_tbl['address_two'] = $param_data['address2'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $this->db->update('address',$data_address_tbl);
        
        
        
        
        $this->db->where('physician_id', $param_data['physician_id']);
        return $this->db->update('physician',$data);
    }
    
    
    public function new_radio_by_facility($param_data)
    {
        $data['first_name'] = $param_data['fname'];
        $data['last_name'] = $param_data['lname'];
        $data['institution'] = $param_data['institution'];
        $data['profile_type'] = 'Radiology';
        $data['dob'] = $param_data['dob'];
        $data['gender'] = $param_data['gender'];
        $data['specialization'] = $param_data['specialization'];
        $data['phone_number'] = $param_data['phone'];
        $data['email'] = $param_data['email'];
        $data['department'] = $param_data['department'];
        $data['physician_type'] = 'doctor';
        
        $data_address_tbl['address_one'] = $param_data['address1'];
        $data_address_tbl['address_two'] = $param_data['address2'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        
        $address_inserted_id = $this->db->insert('address',$data_address_tbl) ? $this->db->insert_id() : FALSE;
        if($address_inserted_id)
            $data['address'] = $address_inserted_id;
        else
            $data['address'] = 0;
        
        return ($this->db->insert('physician',$data))? $this->db->insert_id() : FALSE;
    }
    public function new_doctor_by_facility($param_data){
        
   
        
        $data['first_name'] = $param_data['fname'];
        $data['last_name'] = $param_data['lname'];
        $data['institution'] = $param_data['institution'];
        $data['profile_type'] = 'Facility';
        $data['dob'] = $param_data['dob'];
        $data['gender'] = $param_data['gender'];
        $data['specialization'] = $param_data['specialization'];
        $data['phone_number'] = $param_data['phone'];
        $data['email'] = $param_data['email'];
        $data['department'] = $param_data['department'];
        $data['physician_type'] = 'doctor';
        
        $data_address_tbl['address_one'] = $param_data['address1'];
        $data_address_tbl['address_two'] = $param_data['address2'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        
        $address_inserted_id = $this->db->insert('address',$data_address_tbl) ? $this->db->insert_id() : FALSE;
        if($address_inserted_id)
            $data['address'] = $address_inserted_id;
        else
            $data['address'] = 0;
        
        return ($this->db->insert('physician',$data))? $this->db->insert_id() : FALSE;
        
        
    }
    
    
    
    
    
    
    
    
    public function new_doctor($param_data){
        
   
        
        $data['first_name'] = $param_data['fname'];
        $data['last_name'] = $param_data['lname'];
        $data['profile_type'] = $param_data['profiletype'];
        $data['institution'] = $param_data['institution'];
        $data['dob'] = $param_data['dob'];
        $data['gender'] = $param_data['gender'];
        $data['specialization'] = $param_data['specialization'];
        $data['phone_number'] = $param_data['phone'];
        $data['email'] = $param_data['email'];
        $data['department'] = $param_data['department'];
        $data['physician_type'] = 'doctor';
        
        $data_address_tbl['address_one'] = $param_data['address1'];
        $data_address_tbl['address_two'] = $param_data['address2'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        
        $address_inserted_id = $this->db->insert('address',$data_address_tbl) ? $this->db->insert_id() : FALSE;
        if($address_inserted_id)
            $data['address'] = $address_inserted_id;
        else
            $data['address'] = 0;
        
        return ($this->db->insert('physician',$data))? $this->db->insert_id() : FALSE;
        
        
    }
}