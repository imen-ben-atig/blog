<?php
include_once 'config.php';


if(isset($_GET['t'],$_GET['id']) AND !empty($_GET['t']) AND !empty($_GET['id'])){
    $getid=(int) $_GET['id'];
    $gett=(int) $_GET['t'];

    $sessionid= 4 ;

    $pdo = config::getConnexion();

    $check = $pdo->prepare('SELECT id_blog FROM blogs WHERE id_blog= ?');
    $check->execute(array($getid));

    if($check->rowCount() ==1 ) {

        if($gett == 1) {
            $check_like=$pdo->prepare('SELECT id FROM likes where id_blog= ? AND id_user= ? ');
            $check_like->execute(array($getid, $sessionid));

            if($check_like->rowCount() == 1 ) {
                $del=$pdo->prepare('DELETE FROM likes where id_blog= ? AND id_user= ? ');
            $del->execute(array($getid, $sessionid));
            

            }else{
                $ins = $pdo->prepare('INSERT INTO likes (id_blog, id_user) VALUES (?, ?)');
                $ins->execute(array($getid, $sessionid));
                $del=$pdo->prepare('DELETE FROM dislikes where id_blog= ? AND id_user= ? ');
                $del->execute(array($getid, $sessionid));

            }


           

        }
        elseif($gett == 2){

            $check_like=$pdo->prepare('SELECT id FROM dislikes where id_blog= ? AND id_user= ? ');
            $check_like->execute(array($getid, $sessionid));

            if($check_like->rowCount() == 1 ) {
                $del=$pdo->prepare('DELETE FROM dislikes where id_blog= ? AND id_user= ? ');
            $del->execute(array($getid, $sessionid));

            }else{
                $ins = $pdo->prepare('INSERT INTO dislikes (id_blog, id_user) VALUES (?, ?)');
                $ins->execute(array($getid, $sessionid));
                $del=$pdo->prepare('DELETE FROM likes where id_blog= ? AND id_user= ? ');
            $del->execute(array($getid, $sessionid));

            }

        }
        header('Location: '.$_SERVER['HTTP_REFERER']);
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