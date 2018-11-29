<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/16/2017
 * Time: 5:51 PM
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of dashboard
 *
 * @author Admin
 */
class Dashboard extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('login/user_model');
        $this->load->model('dashboard/dashboard_model');
        $this->load->library('session');

    }

    public function index() {

			$login_result = $this->session->userdata('login_result');
			$userName = $this->session->userdata('userName');
			$userRole = $this->session->userdata('userRole');
			


            if($login_result == TRUE)
            {
            	$data = array(
                    'sessionType' => 0,
                    'version'=>0,
                    'creator_id'=>1,
                    'userName'=>$userName,
                    // 'menu'=>'dashboard'

	            );
	            
	           
	            
	            
	            if($userRole == 1)//super admin
	            {
                    $this->template->set_template('login_signup');

	            }
	            else if($userRole == 2)//institution admin
	            {

                    $this->template->set_template('login_signup_institution');
	                
	            }
	            else if($userRole == 3)//facility admin
	            {
                    $this->template->set_template('login_signup_facility');
	                
	            }
	            else if($userRole == 4)//doctor
	            {
                    $this->template->set_template('login_signup_doctor');
	                
	            }
	            else if($userRole == 5)//radiologist
	            {
                    $this->template->set_template('login_signup_radio');
	                
	            }
	            else if($userRole == 6)//patient
	            {
                    $this->template->set_template('login_signup_patient');
	                
	            }
	            else
	            {
	                
	            }
	            
	            $this->template->write('title', 'Dashboard Page', TRUE);
            }
            else
            {
            	$data = array(

	            );
                $this->template->set_template('new_design');
	            $this->template->write('title', 'Dashboard Page', TRUE);
            	$this->template->write_view('content', 'dashboard_guest', $data, TRUE);
            }
            $this->template->render();
    }
    
    
    public function site_members()
    {
        $result = $this->dashboard_model->get_members_count();
        
        echo json_encode($result);
        exit;
    }
}

/* End of file dashboard.php */
/* Location: ./application/modules/dashboard/controllers/dashboard_model.php */