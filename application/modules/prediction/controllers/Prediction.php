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
class Prediction extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('signup/user_model');
        $this->load->model('prediction/prediction_model');
        
        $this->load->library('session');

    }

    public function index() {

        
			
       
    }
    
    public function getDepartmentSelects()
    {
        
        $result = $this->department_model->get_department();
        
        $json = array();
        $data['id'] = '';
        $data['name'] = 'Select Your Department';
        array_push($json, $data);
        foreach($result as $key=>$value)
        {
            $data['id'] = $value->department_id;
            $data['name'] = $value->department_name;
            array_push($json, $data);
        }
        echo json_encode($json);
        exit;
        
        
    }
    public function deletePredictionById()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->prediction_model->del_prediction_by_id($row_id);
        echo json_encode($result);
        exit;
    }
    public function getPredictionByRowID()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->prediction_model->get_prediction_by_id($row_id);
        echo json_encode($result);
        exit;
    }
    public function getPrediction()
    {
        
        $result = $this->prediction_model->get_prediction();
        echo json_encode($result);
        exit;

    }
    public function updatePrediction()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $prediction_id = $request->prediction_id;
        $prediction_name = $request->prediction_name;
        $prediction_desc = $request->prediction_desc;
       
        $data = array(
            'prediction_id' => $prediction_id,
            'prediction_name' => $prediction_name,
            'prediction_desc' => $prediction_desc
        );
        
        $result = $this->prediction_model->update_prediction($data);
        
        
        if($result)
        {
            $json = array('updated'=>1, 'message'=>'success');
        }
        else
        {
            $json = array('updated'=>0, 'message'=>'failed');
        }
        
        echo json_encode($json);
        exit;
        
        
        
        
        
    }
    public function createPrediction()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $prediction_name = $request->prediction_name;
        $prediction_desc = $request->prediction_desc;
       
        $data = array(
            'prediction_name' => $prediction_name,
            'prediction_desc' => $prediction_desc
        );
        
        $result = $this->prediction_model->new_prediction($data);
        
        
        if($result)
        {
            $json = array('inserted'=>1, 'message'=>'success');
        }
        else
        {
            $json = array('inserted'=>0, 'message'=>'failed');
        }
        
        echo json_encode($json);
        exit;
        
        
        
        
        
    }
}

/* End of file dashboard.php */
/* Location: ./application/modules/dashboard/controllers/dashboard_model.php */