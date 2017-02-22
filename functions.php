<?php
	function post()
	{
		if ($_POST) {
			if ($_POST["SSID"] && $_POST["password"]) {
				$fileName = "/var/local/wpa.txt";
				$content = $_POST["SSID"] . "\n" . $_POST["password"] . "\n" . $_POST["deviceName"] . "\n" . $_POST["apiUrl"];

                if ($file = fopen($fileName, "w+")) {
					if (fwrite($file, $content)) {
						fclose($file);
						return "File created";
					} else {
						return "Can't not write in this file";
					}
				} else {
					return "Cannot open file:  " . $fileName;
				}
			} else {
				return "Form not valid";
			}
		}
	}

	function displayIndex()
	{
		return '
			</br>
			<div style="padding-left:38%">
				<div style="border: 1px double black; width:30%;background-color:lightsteelblue">
					<h1 style="padding-left:15%">Wireless configuration</h1>
					<form action="index.php" method="POST" enctype="multipart/form-data">
						<div style="padding-left:30%">
							<p>
								<input type="text" name="deviceName" placeholder="Enter the device name">
							</p>
							<p>
								<input type="text" name="apiUrl" placeholder="Enter api url">
							</p>
							<p>
								<input type="text" name="SSID" placeholder="Enter your SSID">
							</p>
							<p>
								<input type="password" name="password" placeholder="Enter your password">
							</p>
							<p style="padding-left:15%">
								<input type="Submit" name="Submit">
							</p>
						</div>
					</form>
				</div>
			</div>';
	}
?>