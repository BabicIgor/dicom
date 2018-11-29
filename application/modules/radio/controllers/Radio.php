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
class Radio extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('signup/user_model');
        $this->load->model('radio/radio_model');
        $this->load->model('hospital/hospital_model');
        
        $this->load->library('session');

    }
    public function getRadiosByRowId()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->radio_model->get_radios_by_row($row_id);
        echo json_encode($result);
        exit;
    }
    public function getRadiologists()
    {
		$userInstitution = $this->session->userdata('userInstitution');
		$userRole = $this->session->userdata('userRole');
        if($userRole == 1)//superadmin
		{
		    $result = $this->radio_model->get_radiologists();
            echo json_encode($result);
		}
		else
		{
		    
		    if($userInstitution > 0)
    		{
    		    $result = $this->radio_model->get_radiologists($userInstitution);
    		    echo json_encode($result);
    		}
    		else
    		{
    		    $result = [];
    		    echo json_encode($result);
    		}
		    
		    
		    
		}
        
        
        exit;
        
        
    }
    public function deleteRadioById()
    {
		$row_id = $this->input->get('row_id');
        $result = $this->radio_model->delete_radio_by_rowid($row_id);
        
        echo json_encode($result);
        
        exit;

    }
    public function updateRadiologist()
    {
	    $request = json_decode(file_get_contents('php://input'));
	    $physician_id = $request->physician_id;
	    $address_id = $request->address_id;
        $fname = $request->fname;
        $lname = $request->lname;
        $profiletype = $request->profiletype;
        $institution = $request->institution;
        $dob = $request->dob;
        $gender = $request->gender;
        $specialization = $request->specialization;
        $phone = $request->phone;
        $email = $request->email;
        $department = $request->department;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        
        $data = array(
            'physician_id'=>$physician_id,
            'address_id'=>$address_id,
            'fname' => $fname,
            'lname' => $lname,
            'profiletype' => $profiletype,
            'institution' => $institution,
            'dob' => $dob,
            'gender' => $gender,
            'specialization' => $specialization,
            'phone' => $phone,
            'email' => $email,
            'department' => $department,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode
            
        );
        
        $result = $this->radio_model->update_radio($data);
        
        
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
    public function createRadiologistByInstAdmin()
    {
        $request = json_decode(file_get_contents('php://input'));
        $fname = $request->fname;
        $lname = $request->lname;
        
		$userInstitution = $this->session->userdata('userInstitution');
		
		$institution = $this->hospital_model->getInstitutionInfoByRowID($userInstitution);
        $profiletype = $institution->institution_type;
		
		
        $institution = $userInstitution;
        $dob = $request->dob;
        $gender = $request->gender;
        $specialization = $request->specialization;
        $phone = $request->phone;
        $email = $request->email;
        $department = $request->department;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'profiletype' => $profiletype,
            'institution' => $institution,
            'dob' => $dob,
            'gender' => $gender,
            'specialization' => $specialization,
            'phone' => $phone,
            'email' => $email,
            'department' => $department,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode,
            
        );
        
        $result = $this->radio_model->new_radiologist($data);
        
        $created_user_id = $this->user_model->add_new_user_by_doctor($email, $institution, 'radiologist');
        
        
        
        $this->radio_model->update_physician_user_id($result, $created_user_id);
        
        
        

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
    public function createRadiologist()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $fname = $request->fname;
        $lname = $request->lname;
        $profiletype = $request->profiletype;
        $institution = $request->institution;
        $dob = $request->dob;
        $gender = $request->gender;
        $specialization = $request->specialization;
        $phone = $request->phone;
        $email = $request->email;
        $department = $request->department;
        $address1 = $request->address1;
        $address2 = $request->address2;
        $city = $request->city;
        $country = $request->country;
        $state = $request->state;
        $zipcode = $request->zipcode;
        
        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'profiletype' => $profiletype,
            'institution' => $institution,
            'dob' => $dob,
            'gender' => $gender,
            'specialization' => $specialization,
            'phone' => $phone,
            'email' => $email,
            'department' => $department,
            'address1' => $address1,
            'address2' => $address2,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'zipcode' => $zipcode,
            
        );
        
        $result = $this->radio_model->new_radiologist($data);
        
        $created_user_id = $this->user_model->add_new_user_by_doctor($email, $institution, 'radiologist');
        
        
        
        $this->radio_model->update_physician_user_id($result, $created_user_id);
        
        
        

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