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
class Chat extends Public_Controller {

    function __construct() {
        
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('signup/user_model');
        $this->load->model('doctor/doctor_model');
        $this->load->model('hospital/hospital_model');
        $this->load->model('chat/chat_model');
        
        $this->load->library('session');
        

    }
    public function getChatHistory()
    {
		$fromId = $this->input->get('fromId');
		$toId = $this->input->get('toId');
		$result = $this->chat_model->getChatHistoryByFrom($fromId, $toId);
		
		
		$json = array();
		foreach($result as $key=>$value)
		{
		    if($value->u_f == $fromId)
		    {
		        $data['type'] = 'sent';
		        $data['message'] = $value->message;
		    }
		    if($value->u_t == $fromId)
		    {
		        $data['type'] = 'reply';
		        $data['message'] = $value->message;
		    }
		    array_push($json, $data);
		    
		}
        echo json_encode($json);
        exit;

    }
    public function index() {

    }
    
}

/* End of file dashboard.php */
/* Location: ./application/modules/dashboard/controllers/dashboard_model.php */