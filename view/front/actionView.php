<?php
include_once 'config.php';


if(isset($_GET['t'],$_GET['id']) AND !empty($_GET['t']) AND !empty($_GET['id'])){
    $getid=(int) $_GET['id'];
    $gett=(int) $_GET['t'];

    $sessionid= 3 ;

    $pdo = config::getConnexion();

    $check = $pdo->prepare('SELECT id_blog FROM blogs WHERE id_blog= ?');
    $check->execute(array($getid));

    if($check->rowCount() ==1 ) {

        if($gett == 1) {
            $ins = $pdo->prepare('INSERT INTO likes (id_blog) VALUES (?)');
            $ins->execute(array($getid));

        }
        elseif($gett == 2){

            $ins = $pdo->prepare('INSERT INTO dislikes (id_blog) VALUES (?)');
            $ins->execute(array($getid));

        }
        elseif($gett == 3){
            $check_views=$pdo->prepare('SELECT id FROM views where id_blog= ? AND id_user= ? ');
            $check_views->execute(array($getid, $sessionid));

            if($check_views->rowCount() != 1 ) {

            $ins = $pdo->prepare('INSERT INTO views (id_blog,id_user) VALUES (?,?)');
            $ins->execute(array($getid,$sessionid));

            }
            

        }
        header('Location: blogDetails.php?id_blog='.$getid);
    }
    else{
        echo 'error';
    }
    
}


else {
    echo 'error vide';
    echo $getid;
echo $gett;
}




?>