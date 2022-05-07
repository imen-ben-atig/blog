<?php
include 'controller/commentC.php';
$CommentC = new commentC();
$listcomment = $CommentC->afficherComment();
?>
<?php
require_once 'model/Blog.php';
include_once 'controller/blogController.php';
require_once 'model/commentaire.php';



$error = "";

// create blog
//$comment = null;

// create an instance of the controller
$blogC = new blogController();
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
        // header('Location:blogDetails.php');
    } else
        $error = "Missing information";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TuniCreation.tn</title>

    <link rel="stylesheet" href="css/custom/style.css">
    <link rel="stylesheet" href="css/responsive/responsive.css">
    
    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/home-dsk-1.PNG">
    <style>
        span{
            color:blue;
        }
        p{
            color:blue;
        }
    </style>

</head>

<body class="comingSoon">

    <div class="preloader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- ======= 1.01 Header Area ====== -->
    <header>
        <div class="headerTopArea">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-2 col-5">
                        <div class="langOpt">
                            <span class="langIcon"><span class="langCode">English</span><i class="icofont icofont-caret-down"></i> </span>
                            <ul class="lang">
                                <li data-code="English">English</li>
                                <li data-code="French">French</li>
                                <li data-code="Arbic">Arabic</li>
                                <li data-code="Russian">Russian</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-10 col-7">
                        <ul class="topInfo">
                            <li class="call"><a href="tel:+216"><i class="icofont icofont-ui-call"></i>+216</a></li>
                            <li class="email"><a href="mailto:imen@esprit.tn"><i class="icofont icofont-ui-v-card"></i>imen@esprit.tn</a></li>
                            <li class="clientAreaLi"><span><i class="icofont icofont-user-alt-3"></i>Client area</span></li>
                        </ul>
                        <div class="clientLogin">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerBottomArea">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-9">
                        <a href="index.html" class="logo"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="col-lg-9 col-md-7 menuCol col-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only"></span>
                                <i class="fa fa-navicon"></i>
                            </button>
                        </div>
                        <nav id="navbar" class="collapse navbar-collapse">
                            <ul id="nav">
                                <li class="current-menu-item"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">homepage</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Articles</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendre.html">Achat</a></li>
                                        <li><a href="louer.html">Louer</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-megamenu"><a href="#">pages</a>
                                    <ul class="mega-menu clearfix">
                                        <li class="mMenuCol">
                                            <ul class="menuRow">
                                                <li><a href="index.html">homepage</a></li>
                                            </ul>
                                            <ul class="menuRow">
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="vendre.html">Achat</a></li>
                                                <li><a href="louer.html">Louer</a></li>
                                            </ul>
                                        </li>
                                        <li class="mMenuCol">
                                            <ul class="menuRow">
                                                <li><a href="accountManage.html">My account</a></li>
                                            </ul>
                                            <ul class="menuRow">
                                                <li><a href="support.html">support</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li class="mMenuCol">
                                            <ul class="menuRow">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                            </ul>
                                            <ul class="menuRow">
                                                <li><a href="blog.php">blog</a></li>
                                            </ul>
                                            <ul class="menuRow">
                                                <li><a href="comingSoon.html">coming soon</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="mMenuCol">
                                            <div class="menuDiscount">
                                                <div class="discountImg"><img src="img/icon/home-dsk-1 - Copie.PNG" alt=""></div>
                                                <span>10% discount on</span>
                                                <div class="h3">Any Thing</div>
                                                <a href="#">Try it now!</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="support.html">Support</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 col-md-2 cartCol col-3">
                        <a href="cart.html" class="cart">
                            <span class="count">2</span>
                            <i class="icofont icofont-cart-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php
    $id = $_GET["id_blog"];

    $blog = $blogC->recupererblog($id);

    $db = config::getConnexion();
    $likes = $db->prepare('SELECT id FROM likes WHERE id_blog = ?');
    $likes->execute(array($id));
    $likes = $likes->rowCount();

    $dislikes = $db->prepare('SELECT id FROM dislikes WHERE id_blog = ?');
    $dislikes->execute(array($id));
    $dislikes = $dislikes->rowCount();

    $views = $db->prepare('SELECT id FROM views WHERE id_blog = ?');
    $views->execute(array($id));
    $views = $views->rowCount();


    ?>
    <!-- ======= /1.01 Header Area ====== -->
    <!-- ======= 2.01 Page Title Area ====== -->
    <div class="pageTitleArea animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pageTitle">
                        <div class="h2"><?php echo $blog['objet'] ?></div>
                        <ul class="pageIndicate">
                            <li><a href="">home</a></li>
                            <li><a href="">blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /2.01 Page Title Area ====== -->



    <div class="comingSoonArea secPdng">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 ipad-landscape animated">
                <div onload="counter_fn()">
           <p> <i class="fa fa-eye"> <span id="cntr"><?php echo $views ?></span> </i></p>
        </div>
    
                    <div class="comingContent">
                        <span>New product!</span>
                        <div class="h1"><?php echo $blog['objet']; ?></div>
                        <span><?php echo $blog['date']; ?></span>
                        <br>
                        <span><?php echo $blog['description']; ?></span>
                        <br>
                        <div class="wrapper" >
                                        <a class="likes-counter" >
                                            <a class="fa fa-thumbs-up" href="action.php?t=1&id=<?php echo $blog['id_blog']; ?>"></a>
                                            <a id="l-counter"><?php echo $likes ?></a>
                                        </a>
                                        <a class="dislikes-counter">
                                            <a class="fa fa-thumbs-down" href="action.php?t=2&id=<?php echo $blog['id_blog']; ?>"></a>
                                            <a id="d-counter"><?php echo $dislikes ?></a>
                                        </a>
                                    </div>

                        <?php
                        foreach ($listcomment as $comments) {
                            if ($blog['id_blog'] == $comments['id_blog']) {


                        ?>
                                <div class="card">
                                    <div class="card-body">
                                        <?php echo $comments['contenuC']; ?>
                                        <a class="fa fa-trash" href="supprimerblog.php?idCommentaire=<?php echo $comments['idCommentaire']; ?>&id_blog=<?php echo $comments['id_blog']; ?>">  </a>
                                    </div>

                                </div>




                            <?php }

                            ?>


                        <?php
                        }
                        ?>
                        <form action="ajoutCommentaire.php?id_blog=<?php echo $blog['id_blog']; ?>" method="POST" name="f">
                            <input class="form-control" type="textarea" name="contenuC" id="contenuC">
                            <input type="hidden" value="<?PHP echo $blog['id_blog']; ?>" name="id_blog" id="id_blog">
                            <br>
                            <input class="btn btn-primary" type="submit" value="Envoyer" name="submit" >
                        </form>

                    </div>

                </div>
                <div class="col-lg-6 offset-lg-0 animated">

                    <div class="sicleImg">
                    
                      <img src="../back/<?php echo $blog['image']; ?>" alt=""></div>
                </div>
            </div>
        </div>
        
    </div>


    <?php


    ?>


    <div class="sectionBar"></div>
    <!-- ======= 1.09 footer Area ====== -->
    <footer class="secPdngT animated">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footerInfo">
                        <a href="index-1.html" class="footerLogo">
                            <img src="img/footerLogo.png" alt="">
                        </a>
                        <div class="footerTxt">
                            <p>© TuniCreation Corporation. Tous droits réservés. Toutes les marques commerciales sont la propriété de leurs titulaires en Tunisie.</p>
                        </div>
                        <ul class="footerLinkIcon">
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-yelp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget">
                        <div class="h4">Important Links</div>
                        <ul class="footerLink">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contactInfo">
                        <div class="h4">contact with us</div>
                        <span class="call"><a href="tel:+21655311029"><i class="icofont icofont-ui-call"></i>+21655311029</a></span>
                        <span class="email"><a href="mailto:imen.benatig@esprit.tn"><i class="icofont icofont-ui-v-card"></i>imen.benatig@esprit.tn</a></span>
                       <a href="" class="contactBtn Btn">Send us a message</a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======= /1.09 footer Area ====== -->


    <script src="js/jquery.1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/chatScript.js" type="text/javascript"></script>
    <script src="js/active.js"></script>
    <script src="js/darkmode.js"></script>

    <script src="js/comment.js"></script>

</body>

</html>