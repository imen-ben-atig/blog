<?php
	include '../../controller/blogController.php';
	$blogC=new blogController();
	$blogC->supprimerid_blog($_GET["id_blog"]);
	header('Location:afficherBlog.php');
?>