<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Process extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('page/page_model');
        $this->load->library('functions');
    }
	public function test()
	{
		echo 'test';
	}
    public function index(){
        

            $fname = $this->aauth->get_user_first_name();
            $lname = $this->aauth->get_user_last_name();
            $initials = $this->aauth->get_user_name_initials();


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
                'menu' => $this->load->view('menu/admin_main', $menu_data, TRUE),
                'sessionType' => 0
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
                'menu' => $this->load->view('menu/admin_main', $menu_data, TRUE),
                'sessionType' => 1
            );

            $this->template->set_template('login_signup');
            $this->template->write('title', 'Dashboard Page', TRUE);
            $this->template->write_view('content', 'studio', $data, TRUE);
            $this->template->render();
        
    }
}