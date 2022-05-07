<?php
	include 'controller/commentC.php';
	$comment=new commentC();
	$comment->supprimercommentC($_GET["idCommentaire"]);
   header('Location:blogDetails.php?id_blog='.$_GET["id_blog"]);
  
?>