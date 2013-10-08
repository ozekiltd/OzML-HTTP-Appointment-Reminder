<?php
	$url = "http://yoursite.com/callconnected.php".
		   "?AppLocation=".$_REQUEST['Location']."%26AppDate=".$_REQUEST['Date'];
	
	$server = "http://ozekixepbx.ip:7780";		
	$command = http_build_query(array('Command' => "Call", 
	                                  'Dialed' => $_REQUEST['Dialed'], 
	                                  'CallerDisplayName' => "Appointment Reminder",
									  'Url' => $url));
	
	$params = array('http' => array('method' => "POST",'content' => $command));   
	$context = stream_context_create($params);    
	$fp = @fopen($server, 'r', false, $context);
?>