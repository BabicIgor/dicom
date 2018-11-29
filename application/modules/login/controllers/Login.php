<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Login extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login/user_model');
        $this->load->library('functions');
		$this->load->library('session');

    }
    public function getUserInfo()
    {
        

        
		$userName = $this->session->userdata('userName');
		$userRole = $this->session->userdata('userRole');
		$userId = $this->session->userdata('userid');
		
		
		if($userRole == NULL)
		{
    		$data['success'] = 0;
		    $data['role'] = $userRole;
    		$data['name'] = $userName;
    		$data['userId'] = $userId;
		}
		else
		{
		    $data['role'] = $userRole;
    		$data['name'] = $userName;
    		$data['userId'] = $userId;
    		$data['success'] = 1;
		}
		
		
		echo json_encode($data);
		return;
		
			
    }
    
    
    
    
	public function index()
	{
	    /*$request = json_decode(file_get_contents('php://input'));
        $email = $request->email;
        $password = $request->password;*/
        
        
		$email = $this->input->post('email');
		$password = $this->input->post('password');
        $res = $this->user_model->verifyUser($email, $password);
        
       
        if($res)
        {
        	$result['login'] = TRUE;
        	
        	if($res->role == 4)
        	{
        	    $row_userInfo = $this->user_model->getUserNameByUserID($res->user_id);
        	    
        	    $login_data = array(
            		'login_result' => 1,
            		'userName'=>$row_userInfo->first_name." ".$row_userInfo->last_name,
            		'userid'=>$res->user_id,
            		'userRole'=>$res->role,
            		'userInstitution' => $res->institution_id
            	);
        	}
        	else
        	{
            	$login_data = array(
            		'login_result' => 1,
            		'userName'=>$res->username,
            		'userid'=>$res->user_id,
            		'userRole'=>$res->role,
            		'userInstitution' => $res->institution_id
            	);    
        	}
        	
        	
        	
        	
        	
        	
            $this->session->set_userdata($login_data);
        	$result['login'] = TRUE;
        	$result['message'] = 'login sucess';
            
        }
        else
        {
        	$result['login'] = FALSE;
        	$result['message'] = 'User not found or incorrect password!';
        }
		
		echo json_encode($result);
		exit;
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
    
}