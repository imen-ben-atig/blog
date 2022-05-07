<!DOCTYPE html>

<?php
require_once 'model/Blog.php';
include 'controller/blogController.php';
$blogC = new blogController();
$listeblog = $blogC->afficherBlogs();

?>
<html lang="English">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <link rel="stylesheet" href="css/custom/style.css">
    <link rel="stylesheet" href="css/responsive/responsive.css">
    <link rel="stylesheet" href="css/like.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="img/home-dsk-1.PNG">


</head>

<body class="blog">

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

    <!-- ======= 1.21 Header Area ====== -->
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
                    <div class="col-lg-7 col-md-12 col-7">
                        <ul class="topInfo">
                            <li class="call"><a href="tel:+216-55311029"><i class="icofont icofont-ui-call"></i>+216-55311029</a></li>
                            <li class="email"><a href="mailto:imen.benatig@esprit.tn"><i class="icofont icofont-ui-v-card"></i>imen.benatig@esprit.tn</a></li>
                            <li class="clientAreaLi"><span><i class="icofont icofont-user-alt-3"></i>Client area</span></li>
                        </ul>
                        <div class="clientLogin">
                            <form action="login.php" method="post">
                                <div class="closeBtn"><i class="icofont icofont-close"></i></div>
                                <div class="h5">sign in</div>
                                <div class="userName"><input name="userName" placeholder="Username" type="text"></div>
                                <div class="password"><input name="password" placeholder="Password" type="password"></div>
                                <input type="submit" value="sign in">
                                <div class="h5">Forgot Passsword? <a href="#">Click here</a></div>
                                <div class="logBtm">
                                    <div class="h5">Don’t have an account yet?</div>
                                    <a href="accountManage.html" class="signUp">Click here to sign up.</a>
                                </div>
                            </form>
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
                                <li class="menu-item"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">homepage</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Products</a>
                                    <ul class="sub-menu">
                                        <li><a href="Products.html">Products</a></li>
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
                                                <li><a href="Products.html">Products</a></li>
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
                                                <li><a href="424.html">424</a></li>
                                            </ul>
                                        </li>
                                        <li class="mMenuCol">
                                            <div class="menuDiscount">
                                                <div class="discountImg"><img src="img/icon/home-dsk-1 - Copie.PNG" alt=""></div>
                                                <span>12% discount on</span>
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
    <!-- ======= /1.21 Header Area ====== -->
    <!-- ======= 2.21 Page Title Area ====== -->
    <div class="pageTitleArea animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pageTitle">
                        <div class="h2">Latest news</div>
                        <ul class="pageIndicate">
                            <li><a href="">home</a></li>
                            <li><a href="">news</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ======= /2.21 Page Title Area ====== -->


    <div class="blogArea secPdng">
        <div class="container">
            <article class="row">

               <?php 

                // On détermine sur quelle page on se trouve
                if (isset($_GET['page']) && !empty($_GET['page'])) {
                    $currentPage = (int) strip_tags($_GET['page']);
                } else {
                    $currentPage = 1;
                }
                $sql = "SELECT COUNT(*) AS nb_blogs FROM `blogs`";

                
               
                
                $db = config::getConnexion();
                

                // On prépare la requête
                $query = $db->prepare($sql);

                // On exécute
                $query->execute();

                // On récupère le nombre d'articles
                $result = $query->fetch();

                $nb_blogs = (int) $result['nb_blogs'];

                //echo $nb_blogs;
                // On détermine le nombre d'articles par page
                $parPage = 6;

                // On calcule le nombre de pages total
                $pages = ceil($nb_blogs / $parPage);

                //  $sql = "SELECT * FROM `blogs` ORDER BY `date` DESC LIMIT 0, 10";

                // Calcul du 1er article de la page
                $premier = ($currentPage * $parPage) - $parPage;

                $sql = 'SELECT * FROM `blogs` ORDER BY `date` DESC LIMIT :premier, :parpage;';

                // On prépare la requête
                $query = $db->prepare($sql);

                $query->bindValue(':premier', $premier, PDO::PARAM_INT);
                $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

                // On exécute
                $query->execute();

                // On récupère les valeurs dans un tableau associatif
                $listeblog = $query->fetchAll(PDO::FETCH_ASSOC);

               
                


                foreach ($listeblog as $blog) {
                ?>


                    <div class="col-lg-4 col-md-6">
                        <div class="singlePost">
                            <div class="postImg">
                                <a href="../back/<?php echo $blog['image']; ?>" download="">
                                    <img src="../back/<?php echo $blog['image']; ?>" alt=""></a>
                            </div>
                            <div class="postContent">
                                <a href="#" class="postTitle h4"><?php echo $blog['objet']; ?></a>
                                <div class="postDate"><?php echo $blog['date']; ?></div>
                                <div class="postExcerpt">
                                    <p><?php echo $blog['description']; ?></p>
                                  
                                </div>
                                <div>
                                    <!-- <div class="wrapper" >
                                        <a class="likes-counter" >
                                            <a class="fa fa-thumbs-up" href="action.php?t=1&id=<?php echo $blog['id_blog']; ?>"></a>
                                            <a id="l-counter"><?php echo $likes ?></a>
                                        </a>
                                        <a class="dislikes-counter">
                                            <a class="fa fa-thumbs-down" href="action.php?t=2&id=<?php echo $blog['id_blog']; ?>"></a>
                                            <a id="d-counter"><?php echo $dislikes ?></a>
                                        </a>
                                    </div> -->




                                    <div>
                                        <a class="btn btn-primary" href="actionView.php?t=3&id=<?php echo $blog['id_blog']; ?>">Afficher</a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                <?php
                }
                ?>






            </article>
            <div class="row">
                <div class="col-md-12">
                    <div class="pagination  animated">
                        <ul>
                            <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                                <a href="http://localhost/blog/blog/view/front/blog.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                            </li>
                            <?php for ($page = 1; $page <= $pages; $page++) : ?>
                                <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                                <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                    <a href="http://localhost/blog/blog/view/front/blog.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                                </li>
                            <?php endfor ?>
                            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                                <a href="http://localhost/blog/blog/view/front/blog.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionBar"></div>
    <!-- ======= 1.29 footer Area ====== -->
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
                        <span class="call"><a href="tel:+216"><i class="icofont icofont-ui-call"></i>+21655311029</a></span>
                        <span class="email"><a href="mailto:imen.benatig@esprit.tn"><i class="icofont icofont-ui-v-card"></i>imen.benatig@esprit.tn</a></span>
                        <a href="" class="contactBtn Btn">Send us a message</a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ======= /1.29 footer Area ====== -->


    <script src="js/jquery.1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/chatScript.js" type="text/javascript"></script>
    <script src="js/active.js"></script>
    <script src="js/like.js"></script>
    <script src="js/darkmode.js"></script>


</body>

</html>