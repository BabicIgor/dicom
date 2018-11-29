<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 */
class Admin extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->functions->access();
    }

    public function index(){
         if(!$this->aauth->is_loggedin()){
            redirect('/user', 'refresh');
            return false;
        }else{

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
                'menu' => $this->load->view('menu/admin_main', $menu_data, TRUE)
            );

            $this->template->set_template('admin_template');
            $this->template->write('title', 'Dashboard Page', TRUE);
            $this->template->write_view('content', 'admin/dashboard', $data, TRUE);
            $this->template->render();
        }
    }
}