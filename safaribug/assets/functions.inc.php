<?php
//$goodExt = array('jpeg','jpg');

function walk_dir($path,$goodExt)
{
	if ($dir = opendir($path)) {
		while (false !== ($file = readdir($dir))){
      		if ($file[0]==".") {
				continue;
			}
      		if (is_dir($path."/".$file)){
        		//$retval[] = walk_dir($path."/".$file);
        		$retval[] = walk_dir($file);
			} elseif ( is_file($path."/".$file) ){
				if (RetOkExt($file,$goodExt) != ''){
					//$retval[] = $path."/".$file;
					$retval[] = $file;
				}
			}
		}
		closedir($dir);
	}
	return $retval;
}


//returns the file extension if it is OK, if not, it returns ''
function RetOkExt($filename,$goodExt){
	$myExt = '';
	foreach($goodExt as $value){
		$testExt = "\.".$value."$";
		if (eregi($testExt, $filename)) {
			$myExt = $value;
		}
	}
	return $myExt;
}


//returns an associatve array of the credits for the given filename
//filename is the file for the captions txt fil


function readCredits($filename){
	$arr = file($filename);
	$creditArr = array();	
	for($i=0;$i<count($arr);$i++){
		$arr[$i] = trim($arr[$i]);
		//echo $arr[$i]."\n";
		if ($arr[$i] != ""){
			if (($arr[$i]{0} != "#") OR (!$arr[$i]{0} != "")){
				$exp = explode("\t",$arr[$i]);
				if (count($exp) > 1){
					$creditArr[$exp[0]] = $exp[1];				                                      }
				$exp = '';
			}
		}
	}
	return $creditArr;
	

}


?>