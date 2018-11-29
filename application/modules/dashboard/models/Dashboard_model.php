<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    
    public function get_members_count()
    {
		
        

        $query = $this->db->get('institution');
        $hospital_count = $query->num_rows();
        
        $this->db->where('physician_type', 'doctor');
        $query = $this->db->get('physician');
        $doctors = $query->num_rows();
        
        
        $this->db->where('physician_type', 'radio');
        $query = $this->db->get('physician');
        $radiologists = $query->num_rows();
        
        
        $data['inst'] = $hospital_count;
        $data['doctors'] = $doctors;
        $data['radiologists'] = $radiologists;
        
        return $data;
        
    }
}