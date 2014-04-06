<?php
date_default_timezone_set("America/Los_Angeles");

function get_files_w_exceptions($dir, $exclude = ".|..", $recursive = true) {
	$files = array();
	$dir = rtrim($dir, "/") . '/';
	$exclude = str_replace();
	$exclude_array = explode("|", $exclude);
	$dh = opendir($dir) or die("Could not open $dir");
	while(false !== ($f = readdir($dh))) {

		if (!in_array(strtolower($f), $exclude_array)) {

				if(is_dir($dir . $f ."/")) { // THIS IF STATEMENT to handle recursive case WORKS

			    	if ($recursive) {
						
						$files[] = get_files_w_exceptions($dir. $f . '/', $exclude, true);
					
					} 
							  	
				} 	else {
						
					$files[] = $f;
				}
		}	
	}
	closedir($dh);
	return $files;
}

function get_files_by_types($dir, $file_types = "jpg|gif|png", $recursive = true) {
    $files = array();
    $dir = rtrim($dir, "/") . '/';
    $types = explode("|", strtolower($file_types));
    $dh = opendir($dir) or die("Could not open $dir");
    while(false !== ($f = readdir($dh))) {
        if (strpos($f, '.') == 0) continue;
        if (is_dir($dir . $f)) {
            $files[] = get_files_by_types($dir. $f . '/', $file_types, true);
        } else {
            if(in_array(substr(strtolower($f), strrpos($f, ".") + 1), $types)) {
                array_push($files, $f);
            }   
        }   
    }   
    closedir($dh);
    return $files;
}

// function get_files_by_types($dir, $file_types = "jpg|gif", $recursive = true) {
// 	$files = array();
// 	$dir = rtrim($dir, "/") . '/';
// 	$types = explode("|", strtolower($file_types));
// 	$dh = opendir($dir) or die("Could not open $dir");
// 	while(false !== ($f = readdir($dh))) {
// 		if (strpos($f, '.') == 0) {
// 			continue;
// 		} elseif (is_dir($dir . $f ."/")) {
// 				if ($recursive) {					
// 					$files[] = get_files_by_types($dir. $f . '/', $file_types, true);				
// 				}		
// 		} else {
// 				if(in_array(substr(strtolower($f), strrpos($f, ".") + 1), $types)) {
// 					array_push($files, $f);
// 				}		
// 		}		
// 	}
// 	closedir($dh);
// 	return $files;
// }

function get_image_info_by_types($dir, $file_types = "jpg|gif|png") {
	$info = array();
	$img_info = array();
	$dir = rtrim($dir, "/") . '/';
	$types = explode("|", strtolower($file_types));
	$dh = opendir($dir) or die("Could not open $dir");
	while(false !== ($f = readdir($dh))) {
		if (strpos($f, '.') == 0) {
			continue;
		}
		if(in_array(substr(strtolower($f), strrpos($f, ".") + 1), $types)) {
					$info[] = getimagesize($dir . $f);
					$img_info[$f] = $info;
			}		
				
	}
	closedir($dh);
	return $img_info;
}





