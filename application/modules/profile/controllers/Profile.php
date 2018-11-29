<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Profile extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('page/page_model');
        $this->load->library('functions');
        $this->load->library('google');
    }

    public function index(){
        

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
                'google_login_url' =>$google_login_url

                
            );

            $this->template->set_template('login_signup');
            $this->template->write('title', 'Dashboard Page', TRUE);
            $this->template->write_view('content', 'profile', $data, TRUE);
            $this->template->render();
        
    }
}