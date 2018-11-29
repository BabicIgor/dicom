<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hospital_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    public function getNameByType($type)
    {
        
        $this->db->where('institution_type', $type);
        $query = $this->db->get('institution');
        return ($query->num_rows() > 0)?$query->result():FALSE;

    }
    
    
    
    
    public function deleteInstitutionByRowID($row_id)
    {

		
		$this->db->where('institution_id', $row_id);
		$this->db->delete('users');
		
		
		$this->db->where('institution', $row_id);
		$this->db->delete('physician');
		
		$this->db->where('institution_id', $row_id);
		$this->db->delete('institution');
    }
    public function getInstitutionInfoByRowID($row_id)
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `institution` a LEFT JOIN `address` b ON a.`address` = b.`address_id` WHERE a.`institution_id` = '.$row_id);
        $query_result = $query->row();
        if (sizeof($query_result) > 0) {
            return $query->row();
        } else {
            return [];
        }
    }
    public function get_master_institution_by_facility_id($facility_id)
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `institution` a LEFT JOIN `address` b ON a.`address` = b.`address_id` WHERE a.`institution_id` = '.$facility_id);
        $row = $query->row();
        if (sizeof($row) > 0) {
            return $query->row();
        } else {
            return [];
        }
    }
    
    
    public function get_facility_by_institution($institution_id)
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `institution` a LEFT JOIN `address` b ON a.`address` = b.`address_id` WHERE a.`master_institution_id` = '.$institution_id);
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    public function get_institution()
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `institution` a LEFT JOIN `address` b ON a.`address` = b.`address_id` WHERE a.`master_institution_id` = 0');
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
    public function update_institution($param_data)
    {
        
        
        
        
        
        
        $data['institution_name'] = $param_data['institution_name'];
        $data['institution_type'] = $param_data['institution_type'];
        $data['phone_number_one'] = $param_data['phone_1'];
        $data['email'] = $param_data['email'];
        $data['website'] = $param_data['website'];
        $data['equipment'] = $param_data['equipment'];
        
        
        
        $this->db->where('address_id', $param_data['address_id']);
        $data_address_tbl['address_one'] = $param_data['address_1'];
        $data_address_tbl['address_two'] = $param_data['address_2'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $this->db->update('address',$data_address_tbl);
        


        
        
        $this->db->where('institution_id', $param_data['institution_id']);

        return $this->db->update('institution',$data);

        
        
    }
    public function new_radiology_by_institution($param_data){
        
   
        
        $data['institution_name'] = $param_data['institution_name'];
        $data['master_institution_id'] = $param_data['institution_id'];
        $data['institution_type'] = $param_data['institution_type'];
        $data['phone_number_one'] = $param_data['phone_1'];
        $data['email'] = $param_data['email'];
        $data['website'] = $param_data['website'];
        $data['equipment'] = $param_data['equipment'];
        
        
        $data_address_tbl['address_one'] = $param_data['address_1'];
        $data_address_tbl['address_two'] = $param_data['address_2'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $address_inserted_id = $this->db->insert('address',$data_address_tbl) ? $this->db->insert_id() : FALSE;
        
        


        if($address_inserted_id)
            $data['address'] = $address_inserted_id;
        else
            $data['address'] = 0;
        
        return ($this->db->insert('institution',$data))? $this->db->insert_id() : FALSE;
        
        
    }
    
    
    public function update_facility_by_institution_admin($param_data){
        
        
        
        
        $data['institution_name'] = $param_data['institution_name'];
        $data['institution_type'] = $param_data['institution_type'];

        $data['phone_number_one'] = $param_data['phone_1'];
        $data['email'] = $param_data['email'];
        $data['website'] = $param_data['website'];
        $data['equipment'] = $param_data['equipment'];
        
        
        
        $this->db->where('address_id', $param_data['address_id']);
        $data_address_tbl['address_one'] = $param_data['address_1'];
        $data_address_tbl['address_two'] = $param_data['address_2'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $this->db->update('address',$data_address_tbl);
        


        
        
        $this->db->where('institution_id', $param_data['institution_id']);

        return $this->db->update('institution',$data);
        
        
        
        
        
        
    }
    
    
    
    public function new_facility_by_institution($param_data){
        
   
        
        $data['institution_name'] = $param_data['institution_name'];
        $data['master_institution_id'] = $param_data['institution_id'];
        $data['institution_type'] = $param_data['institution_type'];
        $data['phone_number_one'] = $param_data['phone_1'];
        $data['email'] = $param_data['email'];
        $data['website'] = $param_data['website'];
        $data['equipment'] = $param_data['equipment'];
        
        
        $data_address_tbl['address_one'] = $param_data['address_1'];
        $data_address_tbl['address_two'] = $param_data['address_2'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $address_inserted_id = $this->db->insert('address',$data_address_tbl) ? $this->db->insert_id() : FALSE;
        
        


        if($address_inserted_id)
            $data['address'] = $address_inserted_id;
        else
            $data['address'] = 0;
        
        return ($this->db->insert('institution',$data))? $this->db->insert_id() : FALSE;
        
        
    }
    public function new_institution($param_data){
        
   
        
        $data['institution_name'] = $param_data['institution_name'];
        $data['institution_type'] = $param_data['institution_type'];
        $data['phone_number_one'] = $param_data['phone_1'];
        $data['email'] = $param_data['email'];
        $data['website'] = $param_data['website'];
        $data['equipment'] = $param_data['equipment'];
        
        
        $data_address_tbl['address_one'] = $param_data['address_1'];
        $data_address_tbl['address_two'] = $param_data['address_2'];
        $data_address_tbl['country'] = $param_data['country'];
        $data_address_tbl['city'] = $param_data['city'];
        $data_address_tbl['state'] = $param_data['state'];
        $data_address_tbl['zipcode'] = $param_data['zipcode'];
        $address_inserted_id = $this->db->insert('address',$data_address_tbl) ? $this->db->insert_id() : FALSE;
        
        


        if($address_inserted_id)
            $data['address'] = $address_inserted_id;
        else
            $data['address'] = 0;
        
        return ($this->db->insert('institution',$data))? $this->db->insert_id() : FALSE;
        
        
    }
}