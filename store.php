<?php
	ini_set("display_errors", 1);
	if (isset($_POST["SSID"]) && isset($_POST["password"])) { 
		$password=$_POST["password"];
		$fileName = "/var/local/wpa.txt";
		$content = $_POST["SSID"]."\n".$_POST["password"]."\n".$_POST["deviceName"]."\n".$_POST["apiUrl"];
		$file = fopen($fileName, "w+") or die('Cannot open file:  '.$fileName);	
var_dump($content);	
		if (fwrite($file, $content)) {
			echo "File created";
			fclose($file);
		} else {
			echo "Can't not write in this file";
		}
	}
?>
