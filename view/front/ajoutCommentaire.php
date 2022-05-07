<?php
include 'controller/commentC.php';
require_once 'model/commentaire.php';
$CommentC = new commentC();
$error = "";

$id=$_GET["id_blog"];
// create blog
$comment = null;

// create an instance of the controller
//$blogC = new blogController();
if (
    isset($_POST["submit"])
) {
    if (
        !empty($_POST["contenuC"]) &&
        !empty($_POST['id_blog'])
    ) {
        $comment = new commentaire(
            $_POST['contenuC'],
            $_POST['id_blog']

        );
        $CommentC->ajouterComment($comment);
       // echo "<script>window.location = 'http://www.yourdomain.com'</script>";

         header('Location:blogDetails.php?id_blog='.$id );
    } else
        $error = "Missing information";
}
?>