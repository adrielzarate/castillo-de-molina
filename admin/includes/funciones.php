<?php
	function ControlAdmin()
	{
		if(!isset($_SESSION['administrador']))
		{
			#header("location: index.php");
			#exit;
		}
	}
?>