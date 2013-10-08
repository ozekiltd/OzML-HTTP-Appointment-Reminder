<?php
    $file_handle = fopen("appointments.txt", "rb");

	while (!feof($file_handle) ) {
	$line_of_text = fgets($file_handle);
	$parts = explode(';', $line_of_text);

	if (date("F, jS, Y", strtotime($parts[2])) >= date("Y-m-d H:i:s")){	
		$server = "http://yoursite.com/caller.php";				
		$command = http_build_query(array('Dialed' => $parts[0], 
									      'Location' => $parts[1], 
									      'Date' => $parts[2]));
		
		$params = array('http' => array('method' => "POST",'content' => $command));   

		$context = stream_context_create($params);
		$fp = @fopen($server, 'r', false, $context);
		
		//Remove the actual line from the file
		}
	}

	fclose($file_handle);
?>