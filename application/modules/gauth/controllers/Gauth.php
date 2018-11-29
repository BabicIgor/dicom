<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class GAuth extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('gauth/user_model');

        $this->load->library('functions');
        $this->load->library('google');
    }
	public function index(){

		
		$data['google_login_url']=$this->google->get_login_url();
		$this->load->view('home_view',$data);

	}
	public function oauth2callback(){
		$google_data=$this->google->validate();
		$username = $google_data['name'];
		$email = $google_data['email'];
		$password = '';
		
		
		if($this->user_model->isExist($email) == TRUE)
        {
        	$row_result = $this->user_model->getUserByEmail($email);
            $login_data = array(
    		'login_result'=>1,
    		'userName'=>$username,
    		'userid'=>$row_result->id
	    	);
		    $this->session->set_userdata($login_data);
			echo "<script>window.opener.postMessage('*','*');</script>";
        }
        else
        {
        	$res = $this->user_model->add_new_user($username, $email, $password);
	        $login_data = array(
	    		'login_result'=>1,
	    		'userName'=>$username,
	    		'userid'=>$res
	    	);
		    $this->session->set_userdata($login_data);
			echo "<script>window.opener.postMessage('*','*');</script>";
        }

        
	
	

	}
}