<?php
/**
 * Common Functions 
 */

 function check_session($value,$for)
 {	
	if($for == 'login')
	{
		if($value){
			redirect(base_url()."welcome");
			return;
		}
	}
	else
	{
		if(!$value){
			redirect(base_url()."login");
			return;
		}
	}
	
 }


/******** Create folder **********/
function save_file($path, $httprawpostdata, $middle)
{
	/***********************************************************************
	Create Directory Structure [Year/Month/Day]
	***********************************************************************/
	
	$dir1 = date('Y');
	$currentDIR = $path.$dir1."/";
	if(!is_dir($currentDIR))
	{
		if(!mkdir($currentDIR)){
			_dirException($dir1);
		}
	}
	$dir2 = date('m');
	$currentDIR = $currentDIR.$dir2."/";
	if(!is_dir($currentDIR)){
		if(!mkdir($currentDIR)){
			_dirException($dir2);
		}
	}
	$dir3 = date('d');
	$currentDIR = $currentDIR.$dir3."/";
	if(!is_dir($currentDIR)){
		if(!mkdir($currentDIR)){
			_dirException($dir3);
		}
	}
	$middle_folder = "input";
	$middle_folder2 = "output";
	$currentDIR1 = $currentDIR.$middle_folder.'/';
	$currentDIR2 = $currentDIR.$middle_folder2.'/';
	if(!is_dir($currentDIR1)){
		if(!mkdir($currentDIR1)){
			_dirException($middle_folder);			
		}
	}
	if(!is_dir($currentDIR2)){
		if(!mkdir($currentDIR2)){
			_dirException($middle_folder2);			
		}
	}

	/***********************************************************************
	Save the Response From ValuePad in the current Year/Month/Day Directory
	***********************************************************************/

	$i             = md5( strtotime("now").$_SERVER['REMOTE_ADDR'] );
	$file_contents = $httprawpostdata;
	$file_         = $i.'-'.time().uniqid('', true).'.xml'; 
	$file_name     = $httprawpostdata = $currentDIR.$middle.$file_;
	$ourFileHandle = fopen($file_name, 'w') or die("can't open file");

	if(!fwrite($ourFileHandle, $file_contents)){
		_dirException($file_);
	}
	fclose($ourFileHandle);
	return $file_name;

}



function search_word_space($String)
{	
	$Words = preg_replace('/(?<!\ )[A-Z]/', ' $0', $String);
	return $Words;
}





