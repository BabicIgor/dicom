<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of Pages Model
 */
class Upload_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();

    }
    public function add_new_track($track_id, $first_image, $video_name, $audio_name){
        $data['version_id'] = $track_id;
        $data['first_image'] = $first_image;
        $data['main_video'] = $video_name;
        $data['video1'] = $video_name;
        $data['audio1_name'] = $audio_name;
        $data['track_count'] = 1;
        $data['publish'] = 0;
        return ($this->db->insert('version',$data))? $this->db->insert_id() : FALSE;
    }
    public function updateTrackByJoin($track_id, $oldver, $version_id, $video_name, $index){
        $this->db->where('version_id', $oldver);
        
        
        
        
        switch($index)
        {
        	case 1:
        		break;
       		case 2:
		        $data['audio2_name'] = $track_id."0";
		        $data['video2'] = $track_id.".webm";
		        $data['track_count'] = 2;
		        $data['second_image'] = $track_id.".jpg";
       			break;
       		case 3:
		        $data['audio3_name'] = $track_id."0";
		        $data['video3'] = $track_id.".webm";
		        $data['track_count'] = 3;
		        $data['third_image'] = $track_id.".jpg";
       			break;
       		case 4:
		        $data['audio4_name'] = $track_id."0";
		        $data['video4'] = $track_id.".webm";
		        $data['track_count'] = 4;
		        $data['fourth_image'] = $track_id.".jpg";
       			break;
        }
        
        $data['main_video'] = $video_name;
        $data['version_id'] = $version_id;
        return ($this->db->update('version',$data))? TRUE : FALSE;
    }
    public function getTrack()
    {
        $query = $this->db->query('SELECT a.*, b.* FROM `version` a LEFT JOIN `users` b ON a.`creator_id` = b.`id`');
        $query_result = $query->result();
        if (sizeof($query_result) > 0) {
            return $query->result();
        } else {
            return FALSE;
        }

    }
    public function getDataByTrack($track_id)
    {
    	
        $this->db->where('version_id', $track_id);
        $query = $this->db->get('version');
        $row = $query->row();
        return ($query->num_rows() > 0)?$row:FALSE;

    }
    public function getDurationByTrack($track_id)
    {
    	
        $this->db->where('version_id', $track_id);
        $query = $this->db->get('version');
        $row = $query->row();
        return ($query->num_rows() > 0)?$row->duration:FALSE;

    }
    public function updateTrack($newInsertedId, $song_name, $artist_name, $duration, $creatorid)
    {
    	
        $this->db->where('id', $newInsertedId);
        $data['song_name'] = $song_name;
    	$data['creator_id'] = $creatorid;
        $data['artist_name'] = $artist_name;
        $data['duration'] = $duration;
        return ($this->db->update('version',$data))? TRUE : FALSE;

    }





}