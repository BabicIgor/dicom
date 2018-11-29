<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Comments extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('comments/comment_model');
        $this->load->library('functions');
		$this->load->library('session');

    }
	public function put($version)
	{
		$version_id = $this->comment_model->getIdByVersion($version);
	    $request = json_decode(file_get_contents('php://input'));
		$comment = $request->text;
		$userid = $this->session->userdata('userid');
		$this->comment_model->add_comment($userid, $comment, $version_id);
		
		$result = $this->comment_model->get_comment($version_id);
		$resArr = array();
		foreach($result as $key=>$value)
		{
			$data['creator_name'] = $value->username;
			$data['text'] = $value->text;
			$data['creator_id'] = $value->user_id;
			$data['version_id'] = $value->version_id;
			$data['c_id'] = $value->c_id;
			array_push($resArr, $data);
			
		}
		
		
		$result = array('comments'=>$resArr);
		echo json_encode($result);

		
	}	
	public function deleteComment($id, $version_id)
	{
		$this->comment_model->del_comment($id);
		$result = $this->comment_model->get_comment($version_id);
		$resArr = array();
		if(sizeof($result))
		{
			foreach($result as $key=>$value)
			{
				$data['creator_name'] = $value->username;
				$data['text'] = $value->text;
				$data['creator_id'] = $value->user_id;
				$data['version_id'] = $value->version_id;
				$data['c_id'] = $value->c_id;
				
				array_push($resArr, $data);
			}
			
		}
		
		
		echo json_encode($resArr); 

	}
	public function getall($version)
	{
		$version_id = $this->comment_model->getIdByVersion($version);
		$result = $this->comment_model->get_comment($version_id);
		$resArr = array();
		if(sizeof($result))
		{
			foreach($result as $key=>$value)
			{
				$data['creator_name'] = $value->username;
				$data['text'] = $value->text;
				$data['version_id'] = $value->version_id;
				$data['creator_id'] = $value->user_id;
				$data['c_id'] = $value->c_id;
				
				array_push($resArr, $data);
			}
			
		}
		
		
		echo json_encode($resArr);
	}
	
    
}