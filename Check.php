<?php
if(!isset($_SERVER['HTTP_REFERER']))
{
	Header('location:index.php');
	exit();
}
?>