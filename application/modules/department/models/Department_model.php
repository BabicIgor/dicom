<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Department_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    
    public function get_department_by_id($row_id)
    {
        
		$this->db->where('department_id', $row_id);
        $query = $this->db->get('department_list');
        if($query->num_rows() > 0)
        {
            $result = $query->row();
            return $result;
        }
        else
        {
            return [];
        }
    }
   
    public function get_department()
    {
        

        $query = $this->db->get('department_list');
        if($query->num_rows() > 0)
        {
            $result = $query->result();
            return $result;
        }
        else
        {
            return [];
        }
    }
    public function del_department_by_id($row_id)
    {
        $this->db->where('department_id', $row_id);
		$this->db->delete('department_list');
    }
    public function update_department($param_data){
        
        
        
		$this->db->where('department_id', $param_data['department_id']);
        $data['department_name'] = $param_data['department_name'];
        $data['department_desc'] = $param_data['department_desc'];
        return $this->db->update('department_list', $data);
        
        
    }
    public function new_department($param_data){
        
        $data['department_name'] = $param_data['department_name'];
        $data['department_desc'] = $param_data['department_desc'];
        return ($this->db->insert('department_list',$data))? $this->db->insert_id() : FALSE;
        
        
    }
}