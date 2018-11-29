<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Signup extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('signup/user_model');
        $this->load->library('functions');
		$this->load->library('session');
		$this->load->library('phpmailer');
        
    }
    public function verify()
    {
		$token = $this->input->get('token');
		
        $result = $this->user_model->verifyToken($token);
        redirect('/');
        

    }
    public function testRandom()
    {
        echo $this->generateRandomString(30);
    }
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return trim($randomString);
    }
    public function testEmail()
    {
		
        
    }
	public function index()
	{
	    /*$request = json_decode(file_get_contents('php://input'));
        $email = $request->email;
        $password = $request->password;
        $name = $request->name;*/
        
        
        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
		

        
		if($this->user_model->isExist($email) == TRUE)
        {
            $result['login'] = 0;
            $result['message'] = 'Email Already Exist!';
            echo json_encode($result);
        }
        else
        {
            

            $token = $this->generateRandomString(30);
    		
    		$htmlContent = '<h1>Welcome To Our Nuevozen</h1>';
    		$htmlContent .= '<p>Before Login Our WebSite You have to verify email</p><br>';
    		$var = 'Verification Link';
    		$htmlContent .= "<p>Click To Here <a href='http://musicincline.com/signup/verify?token=".$token."'>VericationLink</a>";
    		$subject_new ="Verify Your Email";
    		$this->phpmailer->IsMail();
    		$this->phpmailer->From = 'support@nuevozen.com';
    		$this->phpmailer->FromName = "nuevozen"; 
    		$this->phpmailer->IsHTML(TRUE);
    		$this->phpmailer->AddAddress($email);
    		$this->phpmailer->Subject = $subject_new;
    		$this->phpmailer->Body =$htmlContent;
    		$this->phpmailer->send();
    		$this->phpmailer->ClearAddresses();
            
            
			$name = 'test';
            $res = $this->user_model->add_new_user($name, $email, $password, $token);
    		if($res > 0)
    		{
                $result['login'] = 1;
                $result['message'] = 'success';
    		}
    		else
    		{
                $result['login'] = 0;
                $result['message'] = 'Please Try Again!';
    		}
    		echo json_encode($result);
        }
		exit;

		
	}
    
}