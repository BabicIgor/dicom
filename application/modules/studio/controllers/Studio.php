<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Studio extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('page/page_model');
        $this->load->library('functions');
		$this->load->library('session');
        $this->load->library('google');
		$login_result = $this->session->userdata('login_result');

		if(!$login_result)
        {
        	redirect('/');
        }
    }

    public function index(){

            $fname = $this->aauth->get_user_first_name();
            $lname = $this->aauth->get_user_last_name();
            $initials = $this->aauth->get_user_name_initials();
			$userid = $this->session->userdata('userid');
			$userName = $this->session->userdata('userName');
			$login_result = $this->session->userdata('login_result');
			$google_login_url = $this->google->get_login_url();
            $menu_data = array(
                'fname' => $fname,
                'initials' => $initials,
                'lname' => $lname,
                'userName'=>$userName
                
            );
            

            $data = array(
                'initials' => $initials,
                'fname' => $fname,
                'lname' => $lname,
                'total_users' => $this->aauth->get_number_of_users(),
                'total_groups' => $this->aauth->get_number_of_groups(),
                'total_banned_users' => $this->aauth->get_number_of_banned_users(),
	            'menu' => $this->load->view('menu/admin_main_authed', $menu_data, TRUE),
                'google_login_url' =>$google_login_url,
	            
                'sessionType' => 0,
                'version'=>0,
                'creator_id'=>$userid
            );

            $this->template->set_template('login_signup');
            $this->template->write('title', 'Dashboard Page', TRUE);
            $this->template->write_view('content', 'studio', $data, TRUE);
            $this->template->render();
        
    }
    public function join($version_id){
    	
    		$inst = $this->input->get('inst');
            $fname = $this->aauth->get_user_first_name();
            $lname = $this->aauth->get_user_last_name();
            $initials = $this->aauth->get_user_name_initials();
			$google_login_url = $this->google->get_login_url();

            $menu_data = array(
                'fname' => $fname,
                'initials' => $initials,
                'lname' => $lname
            );
            

            $data = array(
                'initials' => $initials,
                'fname' => $fname,
                'lname' => $lname,
                'total_users' => $this->aauth->get_number_of_users(),
                'total_groups' => $this->aauth->get_number_of_groups(),
                'total_banned_users' => $this->aauth->get_number_of_banned_users(),
                'menu' => $this->load->view('menu/admin_main_authed', $menu_data, TRUE),
                'google_login_url' =>$google_login_url,
                
                'sessionType' => 1,
                'version'=>$version_id,
                'creator_id'=>0
            );

            $this->template->set_template('login_signup');
            $this->template->write('title', 'Dashboard Page', TRUE);
            $this->template->write_view('content', 'studio', $data, TRUE);
            $this->template->render();
        
    }
}