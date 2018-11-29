<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Pages Model
 */
class Comment_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    public function add_comment($userid, $comment, $version){
        $data['user_id'] = $userid;
        $data['text'] = $comment;
        $data['version_id'] = $version;
        return ($this->db->insert('comment',$data))? $this->db->insert_id() : FALSE;
    }
    public function getIdByVersion($version)
    {
        $this->db->where('version_id', $version);
        $query = $this->db->get('version');
        $row = $query->row();
        return ($query->num_rows() > 0)?$row->id:FALSE;

    }
    public function get_comment($version)
    {
    	
        $query = $this->db->query('SELECT a.*, b.* FROM `comment` a LEFT JOIN `users` b ON a.`user_id` = b.`id` WHERE a.`version_id` = '.$version);
        return ($query->num_rows() > 0)?$query->result():array();

    }

	public function del_comment($id)
    {
		$this->db->where('c_id', $id);
		$this->db->delete('comment');
    }

}