<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Version extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('page/page_model');
        $this->load->model('jampedefile/upload_model');
        $this->load->library('functions');
        $this->load->library('google');
        
    }

    public function index(){
        
        $version =  $this->input->get('v');
		$userName = $this->session->userdata('userName');
		$user_id = $this->session->userdata('userid');

		$row_track = $this->upload_model->getDataByTrack($version);
        $fname = $this->aauth->get_user_first_name();
        $lname = $this->aauth->get_user_last_name();
        $initials = $this->aauth->get_user_name_initials();
		$google_login_url = $this->google->get_login_url();

        $menu_data = array(
            'fname' => $fname,
            'initials' => $initials,
            'lname' => $lname,
	        'userName'=>$userName

        );
        
        
        $audioSrc1 = "1";
        $audioSrc2 = "1";
        $audioSrc3 = "1";
        $audioSrc4 = "1";
        if(!empty($row_track->audio1_name) && isset($row_track->audio1_name))
        {
        	$audioSrc1 = $row_track->audio1_name;
        }
		if(!empty($row_track->audio2_name) && isset($row_track->audio2_name))
        {
        	$audioSrc2 = $row_track->audio2_name;
        }
		if(!empty($row_track->audio3_name) && isset($row_track->audio3_name))
        {
        	$audioSrc3 = $row_track->audio3_name;
        }
		if(!empty($row_track->audio4_name) && isset($row_track->audio4_name))
        {
        	$audioSrc4 = $row_track->audio4_name;
        }
        $data = array(
            'initials' => $initials,
            'fname' => $fname,
            'lname' => $lname,
            'total_users' => $this->aauth->get_number_of_users(),
            'total_groups' => $this->aauth->get_number_of_groups(),
            'total_banned_users' => $this->aauth->get_number_of_banned_users(),
            'menu' => $this->load->view('menu/admin_main_authed', $menu_data, TRUE),
            'version'=>$version,
            'max_duration'=>!empty($row_track->duration) ? $row_track->duration : "",
            'track_count'=>!empty($row_track->track_count) ? $row_track->track_count : "",
            'audioSrc1'=>$audioSrc1,
            'audioSrc2'=>$audioSrc2,
            'audioSrc3'=>$audioSrc3,
            'audioSrc4'=>$audioSrc4,
            'user_id'=>$user_id,
            'song_name'=>$row_track->song_name,
            'google_login_url' =>$google_login_url
            
        );
        
        

        $this->template->set_template('login_signup');
        $this->template->write('title', 'Dashboard Page', TRUE);
        $this->template->write_view('content', 'version', $data, TRUE);
        $this->template->render();
        
    }
}