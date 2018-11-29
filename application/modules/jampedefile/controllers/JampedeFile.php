<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class JampedeFile extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('jampedefile/upload_model');
        $this->load->library('functions');
		$this->load->library('session');
        
    }
    function updateTrack()
    {
	    $request = json_decode(file_get_contents('php://input'));
        $song_name = $request->song_name;
        $artist_name = $request->artist_name;
        $newInsertedId = $request->newInsertedId;
        $duration = $request->duration;
        $creatorid = $request->creatorid;

    	
    	
		$res = $this->upload_model->updateTrack($newInsertedId, $song_name, $artist_name, $duration, $creatorid);
		echo $res;
    }
    function getTrackAll()
    {
		$res = $this->upload_model->getTrack();
		$result = array();
		foreach($res as $key=>$value)
		{
			$data['songName'] = $value->song_name;
			$data['creator_name'] = $value->username;
			$data['duration'] = $value->duration;
			$data['first_image'] = $value->first_image;
			$data['second_image'] = $value->second_image;
			$data['third_image'] = $value->third_image;
			$data['fourth_image'] = $value->fourth_image;
			$data['track_count'] = $value->track_count;
			$data['versions'] = $value->version_id;
			array_push($result, $data);
		}
		echo json_encode($result);
    }
    function upload()
    {
	
    	$t=time();
		$target_path = "uploads/";
		$target_path = $target_path . $t.'.webm'; 
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
			
		} else{
			
		}
		
		$exec_url = getcwd()."\\ffmpeg.exe -i ".getcwd()."\\uploads\\".$t.".webm -vframes 1 ".getcwd()."\\uploads\\".$t.".jpg";
		exec($exec_url);
		$exec_url = getcwd()."\\ffmpeg.exe -i ".getcwd()."\\uploads\\".$t.".webm -vn -acodec copy ".getcwd()."\\uploads\\".$t.".ogg";
		exec($exec_url);
		
		
		$first_image = $t.".jpg";
		$video_name = $t.".webm";
		$audio_name = $t;
		$insert_id = $this->upload_model->add_new_track($t, $first_image, $video_name, $audio_name);
		echo $insert_id;
    }
    function uploadProgress()
    {
    	
    }
    function joinvideo()
    {
    	$oldversion = $_POST['oldversion'];
    	$t=time();
		$target_path = "uploads/";
		$target_path = $target_path . $t.'.webm'; 
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
			
		} else{
			
		}
		$exec_url = getcwd()."\\ffmpeg.exe -i ".getcwd()."\\uploads\\".$t.".webm -vframes 1 ".getcwd()."\\uploads\\".$t.".jpg";
		exec($exec_url);
		

		
		
		$row_track = $this->upload_model->getDataByTrack($oldversion);
		if($row_track->track_count == 1)
		{
			$video1_name = $row_track->video1;
			$exec_url = getcwd().'\\ffmpeg.exe -i '.getcwd().'\\uploads\\'.$video1_name.' -i '.getcwd().'\\uploads\\'.$t.'.webm -filter_complex "color=s=640*480 [base]; [0:v] setpts=PTS-STARTPTS,scale=320*240 [upperleft]; [1:v] setpts=PTS-STARTPTS, scale=320*240 [upperright]; [base][upperleft] overlay=shortest=1 [tmp1]; [tmp1][upperright] overlay=shortest=1:x=320;[0:a][1:a]amix=inputs=2" -c:v libvpx-vp9 -b:v 500k -c:a libvorbis -auto-alt-ref 0 '.getcwd().'\\uploads\\'.$t.'0.webm';
			exec($exec_url);
			$this->upload_model->updateTrackByJoin($t, $oldversion, $t."0", $t."0.webm", 2);
			$exec_url = getcwd()."\\ffmpeg.exe -i ".getcwd()."\\uploads\\".$t."0.webm -vn -acodec copy ".getcwd()."\\uploads\\".$t."0.ogg";
			exec($exec_url);
		}
		else if($row_track->track_count == 2)
		{
			$video1_name = $row_track->video1;
			$video2_name = $row_track->video2;
			$exec_url = getcwd().'\\ffmpeg.exe -i '.getcwd().'\\uploads\\'.$video1_name.' -i '.getcwd().'\\uploads\\'.$video2_name.' -i '.getcwd().'\\uploads\\'.$t.'.webm -filter_complex "color=s=640*480 [base]; [0:v] setpts=PTS-STARTPTS,scale=320*240 [upperleft]; [1:v] setpts=PTS-STARTPTS, scale=320*240 [upperright]; [2:v] setpts=PTS-STARTPTS,scale=320*240 [lowerleft]; [base][upperleft] overlay=shortest=1 [tmp1]; [tmp1][upperright] overlay=shortest=1:x=320 [tmp2]; [tmp2][lowerleft] overlay=shortest=1:y=240;[0:a][1:a][2:a]amix=inputs=3" -c:v libvpx-vp9 -b:v 500k -c:a libvorbis -auto-alt-ref 0 '.getcwd().'\\uploads\\'.$t.'0.webm';
			exec($exec_url);
			$this->upload_model->updateTrackByJoin($t, $oldversion, $t."0", $t."0.webm", 3);
			$exec_url = getcwd()."\\ffmpeg.exe -i ".getcwd()."\\uploads\\".$t."0.webm -vn -acodec copy ".getcwd()."\\uploads\\".$t."0.ogg";
			exec($exec_url);
		}
		else if($row_track->track_count == 3)
		{
			$video1_name = $row_track->video1;
			$video2_name = $row_track->video2;
			$video3_name = $row_track->video3;
			$exec_url = getcwd().'\\ffmpeg.exe -i '.getcwd().'\\uploads\\'.$video1_name.' -i '.getcwd().'\\uploads\\'.$video2_name.' -i '.getcwd().'\\uploads\\'.$video3_name.' -i '.getcwd().'\\uploads\\'.$t.'.webm -filter_complex "color=s=640*480 [base]; [0:v] setpts=PTS-STARTPTS,scale=320*240 [upperleft]; [1:v] setpts=PTS-STARTPTS, scale=320*240 [upperright]; [2:v] setpts=PTS-STARTPTS,scale=320*240 [lowerleft]; [3:v] setpts=PTS-STARTPTS, scale=320*240 [lowerright]; [base][upperleft] overlay=shortest=1 [tmp1]; [tmp1][upperright] overlay=shortest=1:x=320 [tmp2]; [tmp2][lowerleft] overlay=shortest=1:y=240 [tmp3]; [tmp3][lowerright] overlay=shortest=1:x=640:y=480;[0:a][1:a][2:a][3:a]amix=inputs=4" -c:v libvpx-vp9 -b:v 500k -c:a libvorbis -auto-alt-ref 0 '.getcwd().'\\uploads\\'.$t.'0.webm';
			exec($exec_url);
			$this->upload_model->updateTrackByJoin($t, $oldversion, $t."0", $t."0.webm", 4);
			$exec_url = getcwd()."\\ffmpeg.exe -i ".getcwd()."\\uploads\\".$t."0.webm -vn -acodec copy ".getcwd()."\\uploads\\".$t."0.ogg";
			exec($exec_url);

		}
		else if($row_track->track_count == 4)
		{
			//$this->upload_model->updateTrackByJoin($t, $oldversion, 2);

		}
		else
		{
			//$this->upload_model->updateTrackByJoin($t, $oldversion, 2);

		}
		
		
		
		/*
		$first_image = $t.".jpg";
		$video_name = $t.".webm";
		$audio_name = $t.".ogg";
		$this->upload_model->updateTrackByJoin($t, $index);*/
    }
}