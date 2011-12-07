<?php
	session_start();
	session_register('v1','v2','v3');
	echo '<h1>'.session_id().'</h1>';
?>
