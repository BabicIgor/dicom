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
class Patient extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('signup/user_model');
        $this->load->model('patient/patient_model');
        $this->load->model('hospital/hospital_model');
        
        $this->load->library('session');

    }

    public function index() {

        
			
       
    }
    
    
    
    public function getPatientByKeyAndValue()
    {
	    $result = $this->patient_model->get_patients_all();
	    $json = array();
	    $patient_id = array();
	    $patient_name = array();
	    foreach($result as $key=>$value)
	    {
	       // $_json['id'] = $value->patientid;
	       // $_json['name'] = $value->first_name." ".$value->last_name;
	        array_push($patient_id, $value->patientid);
	        array_push($patient_name, $value->first_name." ".$value->last_name);
	    }
	    $json['name_data'] = $patient_name;
	    $json['id_data'] = $patient_id;
	    echo json_encode($json);
	    exit;
	    
    }
    
    
    
    
    public function getPatientByRowId()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->patient_model->get_patient_by_row($row_id);
        echo json_encode($result);
        exit;
    }
    
    public function ageTest()
    {
        echo date("Y");
    }
    
    public function getPatients()
    {
		$userInstitution = $this->session->userdata('userInstitution');
		$userRole = $this->session->userdata('userRole');
	
        if($userRole == 1)//superadmin
		{

		}
		else if($userRole == 2)//institution admin
		{
		    if($userInstitution > 0)
    		{
    		    $result = $this->patient_model->get_patients($userInstitution);
    		    $json = array();
    		    foreach($result as $key=>$value)
    		    {
    		        $data['patientid'] = $value->patientid;
    		        $data['name'] = $value->first_name." ".$value->last_name;
    		        $data['institution'] = $value->institution_name;
    		        $data['ethnicity'] = $value->ethnicity;
    		        
	                $arrDob = explode("-", $value->dob);
                    $data['dob'] = intval(date("Y")) - intval($arrDob[0]);
    		        
    		        $data['gender'] = $value->gender == 0 ? 'Male' : 'Female' ;
    		        $data['phone_number'] = $value->phone_number;
    		        $data['patient_email'] = $value->patient_email;
                    array_push($json, $data);
    		    }
    		    
    		    
    		    
    		    
    		    echo json_encode($json);
    		}
    		else
    		{
    		    $result = [];
    		    echo json_encode($result);
    		}    
		}
		else if($userRole == 3)
		{
		   if($userInstitution > 0)
    		{
    		    $result = $this->patient_model->get_patients_by_facility($userInstitution);
    		    $json = array();
    		    foreach($result as $key=>$value)
    		    {
    		        $data['patientid'] = $value->patientid;
    		        $data['name'] = $value->first_name." ".$value->last_name;
    		        $data['institution'] = $value->institution_name;
    		        $data['ethnicity'] = $value->ethnicity;
    		        
    		        
	                $arrDob = explode("-", $value->dob);
                    $data['dob'] = intval(date("Y")) - intval($arrDob[0]);
    		        
    		        
    		        $data['gender'] = $value->gender == 0 ? 'Male' : 'Female' ;
    		        $data['phone_number'] = $value->phone_number;
    		        $data['patient_email'] = $value->patient_email;
                    array_push($json, $data);
    		    }

    		    echo json_encode($json);
    		}
    		else
    		{
    		    $result = [];
    		    echo json_encode($result);
    		}    
		}
		else if($userRole == 4)
		{
		    if($userInstitution > 0)
    		{
    		    $result = $this->patient_model->get_patients_by_facility($userInstitution);
    		    $json = array();
    		    foreach($result as $key=>$value)
    		    {
    		        $data['patientid'] = $value->patientid;
    		        $data['name'] = $value->first_name." ".$value->last_name;
    		        $data['institution'] = $value->institution_name;
    		        $data['ethnicity'] = $value->ethnicity;
    		        
    		        
	                $arrDob = explode("-", $value->dob);
                    $data['dob'] = intval(date("Y")) - intval($arrDob[0]);
    		        
    		        
    		        $data['gender'] = $value->gender == 0 ? 'Male' : 'Female' ;
    		        $data['phone_number'] = $value->phone_number;
    		        $data['patient_email'] = $value->patient_email;
                    array_push($json, $data);
    		    }
    		    
    		    
    		    
    		    
    		    echo json_encode($json);
    		}
    		else
    		{
    		    $result = [];
    		    echo json_encode($result);
    		}   
		}
		else
		{
		    
		}
        
        exit;
        
        
    }
    
    public function deletePatientById()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->patient_model->delete_patient_by_rowid($row_id);
        
        echo json_encode($result);
        
        exit;

    }
    
    
    
    
    
    
    
    
    
    public function updatePatientByInstAdmin()
    {
	    $request = json_decode(file_get_contents('php://input'));
	    $patient_id = $request->patient_id;
	    $address_id = $request->address_id;
        $institution = $request->institution;
	    
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        $dob = $request->dob;
        $gender = $request->gender;
        
        $preferredlanguage = $request->preferredlanguage;
        $ethnicity = $request->ethnicity;
        $race = $request->race;
        $cellphone = $request->cellphone;
        $homephone = $request->homephone;
        $maritialstatus = $request->maritialstatus;



        $email = $request->email;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        
        $data = array(
            'patient_id'=>$patient_id,
            'address_id'=>$address_id,
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'institution' => $institution,
            'dob' => $dob,
            'gender' => $gender,
            
            'race' => $race,
            'ethnicity' => $ethnicity,
            'preferredlanguage' => $preferredlanguage,
            'maritialstatus' => $maritialstatus,
            'cellphone' => $cellphone,
            'homephone' => $homephone,
            
            
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode
            
        );
        
        $result = $this->patient_model->update_patient($data);
        
        
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
    
    
    
    public function createPatientByFacility()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        
        
        
		$userInstitution = $this->session->userdata('userInstitution');
		$userRole = $this->session->userdata('userRole');
		
		
		if($userRole == 2)
		{
		    $institution_id = $userInstitution;    
		}
		else
		{
		    
		}
        
        
        
        
        $facility_id = $request->facility_id;
        $dob = $request->dob;
        $gender = $request->gender;
        $race = $request->race;
        $ethnicity = $request->ethnicity;
        
        $preferredlanguage = $request->preferredlanguage;
        $maritialstatus = $request->maritialstatus;
        
        $cellphone = $request->cellphone;
        $homephone = $request->homephone;
        
        $email = $request->email;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        $data = array(
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'institution_id' => $institution_id,
            'facility_id' => $facility_id,
            'dob' => $dob,
            'gender' => $gender,
            'race' => $race,
            'ethnicity' => $ethnicity,
            'preferredlanguage' => $preferredlanguage,
            'maritialstatus' => $maritialstatus,
            'cellphone' => $cellphone,
            'homephone' => $homephone,
            
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode,
            
        );
        
        $result = $this->patient_model->new_patient_by_facility($data);
        $created_user_id = $this->user_model->add_new_user_by_doctor($email, $facility_id, 'patient');
        $this->patient_model->update_patient_user_id($result, $created_user_id);
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
    
    public function createPatientByFacilityAdmin()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        
        
        
		$userInstitution = $this->session->userdata('userInstitution');
		$userRole = $this->session->userdata('userRole');
		
		
		if($userRole == 2)
		{
		    $institution_id = $userInstitution;    
		}
		else if($userRole == 3)
		{
		    $institution_id = $userInstitution;    
		}
		else if($userRole == 4)
		{
		    $institution_id = $userInstitution;    
		}
		else
		{
		    
		}
		
		$row_institution = $this->hospital_model->get_master_institution_by_facility_id($institution_id);
        
        
        
        
        
        $dob = $request->dob;
        $gender = $request->gender;
        $race = $request->race;
        $ethnicity = $request->ethnicity;
        
        $preferredlanguage = $request->preferredlanguage;
        $maritialstatus = $request->maritialstatus;
        
        $cellphone = $request->cellphone;
        $homephone = $request->homephone;
        
        $email = $request->email;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        $data = array(
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'facility_id' => $institution_id,
            'institution_id' => $row_institution->master_institution_id,
            'dob' => $dob,
            'gender' => $gender,
            'race' => $race,
            'ethnicity' => $ethnicity,
            'preferredlanguage' => $preferredlanguage,
            'maritialstatus' => $maritialstatus,
            'cellphone' => $cellphone,
            'homephone' => $homephone,
            
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode,
            
        );
        
        $result = $this->patient_model->new_patient_by_facility($data);
        $created_user_id = $this->user_model->add_new_user_by_doctor($email, $institution_id, 'patient');
        $this->patient_model->update_patient_user_id($result, $created_user_id);
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
    
    
    
    public function createPatientByInstAdmin()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        
        
        
		$userInstitution = $this->session->userdata('userInstitution');
		$userRole = $this->session->userdata('userRole');
		
		
		if($userRole == 2)
		{
		    $institution_id = $userInstitution;    
		}
		else if($userRole == 3)
		{
		    $institution_id = $userInstitution;    
		}
		else if($userRole == 4)
		{
		    $institution_id = $userInstitution;    
		}
		else
		{
		    
		}
        
        
        
        
        
        $dob = $request->dob;
        $gender = $request->gender;
        $race = $request->race;
        $ethnicity = $request->ethnicity;
        
        $preferredlanguage = $request->preferredlanguage;
        $maritialstatus = $request->maritialstatus;
        
        $cellphone = $request->cellphone;
        $homephone = $request->homephone;
        
        $email = $request->email;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        $data = array(
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'institution_id' => $institution_id,
            
            'dob' => $dob,
            'gender' => $gender,
            'race' => $race,
            'ethnicity' => $ethnicity,
            'preferredlanguage' => $preferredlanguage,
            'maritialstatus' => $maritialstatus,
            'cellphone' => $cellphone,
            'homephone' => $homephone,
            
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode,
            
        );
        
        $result = $this->patient_model->new_patient($data);
        $created_user_id = $this->user_model->add_new_user_by_doctor($email, $institution_id, 'patient');
        $this->patient_model->update_patient_user_id($result, $created_user_id);
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
    
    public function createPatient()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $fname = $request->fname;
        $mname = $request->mname;
        $lname = $request->lname;
        $institution_id = $request->institution_id;
        $dob = $request->dob;
        $gender = $request->gender;
        $race = $request->race;
        $ethnicity = $request->ethnicity;
        
        $preferredlanguage = $request->preferredlanguage;
        $maritialstatus = $request->maritialstatus;
        
        $cellphone = $request->cellphone;
        $homephone = $request->homephone;
        
        $email = $request->email;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        $data = array(
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'institution_id' => $institution_id,
            'dob' => $dob,
            'gender' => $gender,
            'race' => $race,
            'ethnicity' => $ethnicity,
            'preferredlanguage' => $preferredlanguage,
            'maritialstatus' => $maritialstatus,
            'cellphone' => $cellphone,
            'homephone' => $homephone,
            
            'email' => $email,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode,
            
        );
        
        $result = $this->patient_model->new_patient($data);
        $created_user_id = $this->user_model->add_new_user_by_doctor($email, $institution_id, 'patient');
        $this->patient_model->update_patient_user_id($result, $created_user_id);
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