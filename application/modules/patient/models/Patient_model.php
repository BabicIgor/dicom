<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Patient_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    
    
    
    
    public function get_patient_by_row($row_id)
    {
        $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as patient_email FROM `patient` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE a.`patientid` = '.$row_id);
        $query_row = $query->row();
        if (sizeof($query_row) > 0) {
            
            $arrDob = explode("-", $query_row->dob);
            $query_row->dob = $arrDob[1]."/".$arrDob[2]."/".$arrDob[0];

            return $query_row;
        } else {
            return [];
        }
    }
    
    
    
    public function get_patients_all()
    {
        $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as patient_email FROM `patient` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE a.`institution` > 0');
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    
    
    
    
    
    
    
    public function get_patients($userInstitution)
    {
        $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as patient_email FROM `patient` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE a.`institution` = '.$userInstitution.' AND a.`facility` = 0');
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    public function get_patients_by_facility($userInstitution)
    {
        $query = $this->db->query('SELECT a.*, b.*, c.*, c.`email` as inst_email, a.`email` as patient_email FROM `patient` a LEFT JOIN `address` b ON a.`address` = b.`address_id` LEFT JOIN `institution` c ON a.`institution` = c.`institution_id` WHERE a.`facility` = '.$userInstitution.' AND a.`institution` > 0');
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    
    
     public function delete_patient_by_rowid($row_id)
    {
		$this->db->where('patientid', $row_id);
		$query = $this->db->get('patient');
        if($query->num_rows() > 0)
        {
            $row = $query->row();
        }
        $deleting_user_id = $row->patient_user_id;
		
		$this->db->where('user_id', $deleting_user_id);
		$this->db->delete('users');
		
		$this->db->where('patientid', $row_id);
		$this->db->delete('patient');
		
		
    }
    
    
    public function update_patient($param_data)
    {
        

        
        $data['first_name'] = $param_data['fname'];
        $data['middle_name'] = $param_data['mname'];
        $data['last_name'] = $param_data['lname'];
        $data['institution'] = $param_data['institution'];
        
        
        $arrDob = explode("/", $param_data['dob']);
        
        
        $data['dob'] = $arrDob[2]."-".$arrDob[0]."-".$arrDob[1];
        
        $data['gender'] = $param_data['gender'];
        $data['phone_number'] = $param_data['homephone'];
        $data['mobile_number'] = $param_data['cellphone'];
        
        $data['email'] = $param_data['email'];
        
        $data['race'] = $param_data['race'];
        $data['ethnicity'] = $param_data['ethnicity'];
        $data['language'] = $param_data['preferredlanguage'];
        $data['maritial_status'] = $param_data['maritialstatus'];
        
        
        $this->db->where('address_id', $param_data['address_id']);
        $data_address_tbl['address_one'] = $param_data['address1'];
        $data_address_tbl['address_two'] = $param_data['address2'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $this->db->update('address',$data_address_tbl);
        
        
        
        
        $this->db->where('patientid', $param_data['patient_id']);
        return $this->db->update('patient',$data);
    }
    public function update_patient_user_id($physician_id, $user_id)
    {
        $this->db->where('patientid', $physician_id);
        $data['patient_user_id'] = $user_id;
        return $this->db->update('patient',$data);
    }
    public function new_patient_by_facility($param_data){
        
        
        $data['first_name'] = $param_data['fname'];
        $data['middle_name'] = $param_data['mname'];
        $data['last_name'] = $param_data['lname'];
        $data['institution'] = $param_data['institution_id'];
        $data['facility'] = $param_data['facility_id'];
        $data['dob'] = $param_data['dob'];
        $data['gender'] = $param_data['gender'];
        $data['race'] = $param_data['race'];
        $data['ethnicity'] = $param_data['ethnicity'];
        $data['language'] = $param_data['preferredlanguage'];
        $data['maritial_status'] = $param_data['maritialstatus'];
        $data['email'] = $param_data['email'];
        $data['phone_number']  = $param_data['homephone'];
        $data['mobile_number'] = $param_data['cellphone'];
        
        
        
        $data['role'] = 6;
        
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
        
        return ($this->db->insert('patient',$data))? $this->db->insert_id() : FALSE;
        
        
    }
    
    public function new_patient($param_data){
        
        
        $data['first_name'] = $param_data['fname'];
        $data['middle_name'] = $param_data['mname'];
        $data['last_name'] = $param_data['lname'];
        $data['institution'] = $param_data['institution_id'];
        $data['dob'] = $param_data['dob'];
        $data['gender'] = $param_data['gender'];
        $data['race'] = $param_data['race'];
        $data['ethnicity'] = $param_data['ethnicity'];
        $data['language'] = $param_data['preferredlanguage'];
        $data['maritial_status'] = $param_data['maritialstatus'];
        $data['email'] = $param_data['email'];
        $data['phone_number']  = $param_data['homephone'];
        $data['mobile_number'] = $param_data['cellphone'];
        
        
        
        $data['role'] = 6;
        
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
        
        return ($this->db->insert('patient',$data))? $this->db->insert_id() : FALSE;
        
        
    }
}