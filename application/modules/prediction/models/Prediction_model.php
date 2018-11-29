<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Prediction_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    
    public function get_prediction_by_id($row_id)
    {
        
		$this->db->where('prediction_id', $row_id);
        $query = $this->db->get('prediction_master');
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
   
    public function get_prediction()
    {
        
        $this->db->order_by("prediction_id", "desc");
        $query = $this->db->get('prediction_master');
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
    public function del_prediction_by_id($row_id)
    {
        $this->db->where('prediction_id', $row_id);
		$this->db->delete('prediction_master');
    }
    public function update_prediction($param_data){
        
        
        
		$this->db->where('prediction_id', $param_data['prediction_id']);
        $data['prediction_name'] = $param_data['prediction_name'];
        $data['prediction_desc'] = $param_data['prediction_desc'];
        return $this->db->update('prediction_master', $data);
        
        
    }
    public function new_prediction($param_data){
        
        $data['prediction_name'] = $param_data['prediction_name'];
        $data['prediction_desc'] = $param_data['prediction_desc'];
        return ($this->db->insert('prediction_master',$data))? $this->db->insert_id() : FALSE;
        
        
    }
}