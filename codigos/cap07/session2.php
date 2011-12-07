<?php
	$_SESSION['v1']='valor';
	print_r($_SESSION);
		if( session_is_registered('variable') ){
		session_regenerate_id();
	header('location: index.php');
}
?>
