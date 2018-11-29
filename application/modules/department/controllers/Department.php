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
class Department extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('signup/user_model');
        $this->load->model('department/department_model');
        
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
    public function deleteDepartmentById()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->department_model->del_department_by_id($row_id);
        echo json_encode($result);
        exit;
    }
    public function getDepartmentByRowID()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->department_model->get_department_by_id($row_id);
        echo json_encode($result);
        exit;
    }
    public function getDepartment()
    {
        
        $result = $this->department_model->get_department();
        echo json_encode($result);
        exit;

    }
    public function updateDepartment()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $department_id = $request->department_id;
        $department_name = $request->department_name;
        $department_desc = $request->department_desc;
       
        $data = array(
            'department_id' => $department_id,
            'department_name' => $department_name,
            'department_desc' => $department_desc
        );
        
        $result = $this->department_model->update_department($data);
        
        
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
    public function createDepartment()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $department_name = $request->department_name;
        $department_desc = $request->department_desc;
       
        $data = array(
            'department_name' => $department_name,
            'department_desc' => $department_desc
        );
        
        $result = $this->department_model->new_department($data);
        
        
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