<?php
	define("TOKEN", "---yourToken---");			//微信公共账号token

	define("PHOTO_DN", "photo");  //图片文件夹名称
	define("PHOTORZ_DN", "photoResize");  //缩略图文件夹名称
	define("PHOTORZ_MAX", 72);  //获得图片最大数量
	define("WEB4WX", 'http://'.$_SERVER['HTTP_HOST']);	
	define("DEBUG_OUTPUT","/home/wwwroot/log.html");//调试输出文件夹
	require 'photo.php';
	
	//调试函数
	function logger($content)
	{
		if(!defined("DEBUG_OUTPUT")) return;
		$debug = print_r($content,true);
		//$debug = var_export($content,true);
		file_put_contents(DEBUG_OUTPUT, date('Y-m-d H:i:s  ').$debug."<br>", FILE_APPEND);
	}

?>