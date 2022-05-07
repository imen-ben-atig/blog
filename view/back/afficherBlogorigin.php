<?php
	include '../controller/blogController.php';
	$blogC=new blogController();
	$listeblog=$blogC->afficherBlogs(); 
?>
<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>TuniCreation</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
	<body>
	<header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Général</a>
                            
                        </li>
                       
                        <li>
                            <a href="showLocal.php">
                                <i class="fas fa-map-marker-alt"></i>Locaux</a>
                        </li>
                        <li>
                            <a href="showEvenement.php">
                        </li>
                        <li>
                            <a href="showCategorieChef.php">
                        </li>
                      
                        
                    </ul>
                </div>
            </nav>
        </header>
		<div class="container">
			<div class="row">
				<div class="col-6">

				<a class="btn btn-success" href="ajouterBlog.php">Ajouter un Blog</a>
		
		<center><h1>Liste des blogs</h1></center>
		<table class="table table-striped">
			<tr>
				<th>id blog</th>
				<th>objet</th>
				<th>date</th>
				<th>image</th>
				<th>description</th>
				<th>modifier</th>
				<th>supprimer</th>
				
			</tr>
			<?php
				foreach($listeblog as $blog){
			?>
			<tr>
				<td><?php echo $blog['id_blog']; ?></td>
				<td><?php echo $blog['objet']; ?></td>
				<td><?php echo $blog['date']; ?></td>
				<td><img src="<?php echo $blog['image']; ?>" alt="" width="50"></td>
				<td><?php echo $blog['description']; ?></td>
				
				
				<td>
					<form method="POST" action="modifierBlog.php">
						<input class="btn btn-primary" type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $blog['id_blog']; ?> name="id_blog">
					</form>
				</td>
				<td>
					<a class="btn btn-danger" href="supprimerBlog.php?id_blog=<?php echo $blog['id_blog']; ?>">Supprimer</a>
					
					
				</td>
			</tr>
			<?php
				}
			?>
		</table>


				</div>
			</div>
		

		</div>
	    
<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
		
	</body>
</html>
