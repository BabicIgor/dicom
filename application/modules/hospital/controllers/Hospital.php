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
class Hospital extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('signup/user_model');
        $this->load->model('hospital/hospital_model');
        $this->load->library('session');

    }

    public function index() {

        
			
       
    }
    
    
    
    public function getHospitalInfo()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->hospital_model->getInstitutionInfoByRowID($row_id);
        echo json_encode($result);
        exit;
    }
    public function deleteInstitution()
    {
        $row_id = $this->input->get('row_id');
        $result = $this->hospital_model->deleteInstitutionByRowID($row_id);
        echo json_encode($result);
        exit;
    }
    public function getInstitutionNameByType()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $institution_type = $request->institution_type;
        $result = $this->hospital_model->getNameByType($institution_type);
        
        
        $json = array();
        $institution_name = array();
        $institution_id = array();
        foreach($result as $key=>$value)
        {
            $_json['id'] = $value->institution_id;
            $_json['name'] = $value->institution_name;
            
            array_push($json, $_json);
            array_push($institution_name, $value->institution_name);
            array_push($institution_id, $value->institution_id);
        }
        
        $json['data'] = $institution_name;
        $json['data_id'] = $institution_id;
        
        echo json_encode($json);
        exit;
        
    }
    public function getInstitution()
    {
        
        
		$userInstitution = $this->session->userdata('userInstitution');
		$userRole = $this->session->userdata('userRole');
        
        if($userRole == 1)//superadmin
		{
            $result = $this->hospital_model->get_institution();
		}
		else if($userRole == 2)
		{
            $result = $this->hospital_model->get_facility_by_institution($userInstitution);

		}
		else
		{
		    
		}
        echo json_encode($result);
        exit;
        
        
        
        
    }
    public function updateInstitution()
    {
        $request = json_decode(file_get_contents('php://input'));
        
        $institution_id = $request->institution_id;
        $address_id = $request->address_id;
        $institution_name = $request->institution_name;
        $institution_type = $request->institution_type;
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $phone_1 = $request->phone_1;
        $email = $request->email;
        $website = $request->website;
        $country = $request->country;
        $city = $request->city;
        $state = $request->state;
        $equipment = $request->equipment;
        $zipcode = $request->zipcode;
        
        
        
        
        
        $data = array(
            'institution_id'=>$institution_id,
            'address_id'=>$address_id,
            'institution_name' => $institution_name,
            'institution_type' => $institution_type,
            'address_1' => $address_1,
            'address_2' => $address_2,
            'phone_1' => $phone_1,
            'email' => $email,
            'website' => $website,
            'country' => $country,
            'city' => $city,
            'state' => $state,
            'zipcode'=>$zipcode,
            'equipment'=>implode(",",$equipment)
        );
        
        $result = $this->hospital_model->update_institution($data);
        
        
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
    public function createRadiology()
    {
        //for createfacility backend
        $request = json_decode(file_get_contents('php://input'));
        $institution_name = $request->institution_name;
        $institution_id = $request->institution_id;
        $institution_type = $request->institution_type;
        
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $phone_1 = $request->phone_1;
        $email = $request->email;
        $website = $request->website;
        $country = $request->country;
        $city = $request->city;
        $state = $request->state;
        $equipment = $request->equipment;
        $zipcode = $request->zipcode;
        
        
        
        
        
        $data = array(
            'institution_name' => $institution_name,
            'institution_id' => $institution_id,
            'institution_type'=>$institution_type,
            'address_1' => $address_1,
            'address_2' => $address_2,
            'phone_1' => $phone_1,
            'email' => $email,
            'website' => $website,
            'country' => $country,
            'city' => $city,
            'state' => $state,
            'zipcode'=>$zipcode,
            'equipment'=>implode(",",$equipment)
        );
        
        $result = $this->hospital_model->new_radiology_by_institution($data);
        
        $this->user_model->add_new_user_by_institution($email, $result, "facility admin");
        
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
    
    public function updateFacilityByInstAdmin()
    {
        $request = json_decode(file_get_contents('php://input'));
        $institution_name = $request->institution_name;
        
		$userInstitution = $this->session->userdata('userInstitution');
		
		$institution = $this->hospital_model->getInstitutionInfoByRowID($userInstitution);
        $institution_type = $institution->institution_type;
        
        
        $institution_id = $request->institution_id;     
        
        $address_id = $request->address_id;
        
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $phone_1 = $request->phone_1;
        $email = $request->email;
        $website = $request->website;
        $country = $request->country;
        $city = $request->city;
        $state = $request->state;
        $equipment = $request->equipment;
        $zipcode = $request->zipcode;
        
        
        $data = array(
            'institution_name' => $institution_name,
            'institution_id' => $institution_id,
            'institution_type'=>$institution_type,
            'address_id' =>$address_id,
            'address_1' => $address_1,
            'address_2' => $address_2,
            'phone_1' => $phone_1,
            'email' => $email,
            'website' => $website,
            'country' => $country,
            'city' => $city,
            'state' => $state,
            'zipcode'=>$zipcode,
            'equipment'=>implode(",",$equipment)
        );
        
        $result = $this->hospital_model->update_facility_by_institution_admin($data);
        
        $this->user_model->add_new_user_by_institution($email, $result, "facility admin");
        
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
    public function createFacilityByInstAdmin()
    {
        $request = json_decode(file_get_contents('php://input'));
        $institution_name = $request->institution_name;
        
        
		$userInstitution = $this->session->userdata('userInstitution');
		
		$institution = $this->hospital_model->getInstitutionInfoByRowID($userInstitution);
        $institution_type = $institution->institution_type;
		
		
        $institution_id = $userInstitution;        
        
        
        
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $phone_1 = $request->phone_1;
        $email = $request->email;
        $website = $request->website;
        $country = $request->country;
        $city = $request->city;
        $state = $request->state;
        $equipment = $request->equipment;
        $zipcode = $request->zipcode;
        
        
        
        
        
        $data = array(
            'institution_name' => $institution_name,
            'institution_id' => $institution_id,
            'institution_type'=>$institution_type,
            'address_1' => $address_1,
            'address_2' => $address_2,
            'phone_1' => $phone_1,
            'email' => $email,
            'website' => $website,
            'country' => $country,
            'city' => $city,
            'state' => $state,
            'zipcode'=>$zipcode,
            'equipment'=>implode(",",$equipment)
        );
        
        $result = $this->hospital_model->new_facility_by_institution($data);
        
        $this->user_model->add_new_user_by_institution($email, $result, "facility admin");
        
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
    
    
    public function createFacility()
    {
        //for createfacility backend
        $request = json_decode(file_get_contents('php://input'));
        $institution_name = $request->institution_name;
        $institution_id = $request->institution_id;
        $institution_type = $request->institution_type;
        
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $phone_1 = $request->phone_1;
        $email = $request->email;
        $website = $request->website;
        $country = $request->country;
        $city = $request->city;
        $state = $request->state;
        $equipment = $request->equipment;
        $zipcode = $request->zipcode;
        
        
        
        
        
        $data = array(
            'institution_name' => $institution_name,
            'institution_id' => $institution_id,
            'institution_type'=>$institution_type,
            'address_1' => $address_1,
            'address_2' => $address_2,
            'phone_1' => $phone_1,
            'email' => $email,
            'website' => $website,
            'country' => $country,
            'city' => $city,
            'state' => $state,
            'zipcode'=>$zipcode,
            'equipment'=>implode(",",$equipment)
        );
        
        $result = $this->hospital_model->new_facility_by_institution($data);
        
        $this->user_model->add_new_user_by_institution($email, $result, "facility admin");
        
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
    public function createInstitution()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $institution_name = $request->institution_name;
        $institution_type = $request->institution_type;
        $address_1 = $request->address_1;
        $address_2 = $request->address_2;
        $phone_1 = $request->phone_1;
        $email = $request->email;
        $website = $request->website;
        $country = $request->country;
        $city = $request->city;
        $state = $request->state;
        $equipment = $request->equipment;
        $zipcode = $request->zipcode;
        
        
        
        
        
        $data = array(
            'institution_name' => $institution_name,
            'institution_type' => $institution_type,
            'address_1' => $address_1,
            'address_2' => $address_2,
            'phone_1' => $phone_1,
            'email' => $email,
            'website' => $website,
            'country' => $country,
            'city' => $city,
            'state' => $state,
            'zipcode'=>$zipcode,
            'equipment'=>implode(",",$equipment)
        );
        
        $result = $this->hospital_model->new_institution($data);
        
        $this->user_model->add_new_user_by_institution($email, $result, "institution admin");
        
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