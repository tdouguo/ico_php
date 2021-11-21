<?php
if(!function_exists("generate_favicon")){
function generate_favicon(){
	// Create favicon.
	$postvars = array(
		"image" 			=> trim($_FILES["image"]["name"]),
		"image_tmp"			=> $_FILES["image"]["tmp_name"],
		"image_size"		=> (int)$_FILES["image"]["size"],
		"image_dimensions"	=> (int)$_POST["image_dimensions"]);

	// Provide valid extensions and max file size
	$valid_exts = array("jpg","jpeg","gif","png");
	$max_file_size = 179200; // 175kb

	$filenameParts = explode(".",$postvars["image"]);
	$ext = strtolower(end($filenameParts));
	$directory = "./favicon/"; // Directory to save favicons. Include trailing slash.
	$rand = rand(1000,9999);
	$filename = $rand.$postvars["image"];

	// Check not larger than max size.
	if($postvars["image_size"] <= $max_file_size){
		// Check is valid extension.
		if(in_array($ext,$valid_exts)){
			if($ext == "jpg" || $ext == "jpeg"){
				$image = imagecreatefromjpeg($postvars["image_tmp"]);
			}
			else if($ext == "gif"){
				$image = imagecreatefromgif($postvars["image_tmp"]);
			}
			else if($ext == "png"){
				$image = imagecreatefrompng($postvars["image_tmp"]);
			}
			if($image){
				list($width,$height) = getimagesize($postvars["image_tmp"]);
				$newwidth = $postvars["image_dimensions"];
				$newheight = $postvars["image_dimensions"];
				$tmp = imagecreatetruecolor($newwidth,$newheight);
					
				// Copy the image to one with the new width and height.
				imagecopyresampled($tmp,$image,0,0,0,0,$newwidth,$newheight,$width,$height);
			
				// Create image file with 100% quality.
				if(is_dir($directory)){
					if(is_writable($directory)){
						imagejpeg($tmp,$directory.$filename,100) or die('Could not make image file');
						if(file_exists($directory.$filename)){	
							// Image created, now rename it to its
							$ext_pos = strpos($rand.$postvars["image"],"." . $ext);
							$strip_ext = substr($rand.$postvars["image"],0,$ext_pos);
							// Rename image to .ico file
							rename($directory.$filename,$directory.$strip_ext.".ico");
							return '<strong>图标预览:</strong><br/>
							<img src="'.$directory.$strip_ext.'.ico" border="0" title="Favicon 完毕预览" style="padding: 4px 0px 4px 0px;background-color:#e0e0e0" /><br/>
							Favicon/ICO图标制作完毕： <a href="'.$directory.$strip_ext.'.ico" target="_blank" name="右键另存为下载!">点击/右键另存下载，后重命名为"favicon.ico"</a>';
						} else {
							"File was not created.";
						}
					} else {
						return 'The directory: "'.$directory.'" is not writable.';
					}
				} else {
					return 'The directory: "'.$directory.'" is not valid.';
				}
			
				imagedestroy($image);
				imagedestroy($tmp);
			} else {
				return "Could not create image file.";
			}
		} else {
			return "图标过大，不能超过175KB";	
		}
	} else {
		return "图片格式只能是后面几种 (jpg, jpeg, gif, png).";	
	}
}
}

?>