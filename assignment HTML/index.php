<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OP AFigure</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/HTML.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="brand">OP Fans Store</div>
<h1 align="center"> <img src="One_Piece_Title.png" width="400" height="150"  alt=""> </h1>


    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.html">OP Fans Store</a>
            </div>
   
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a>
                    </li>
                    
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-shopping-cart">Product<b class="caret"></b></span></a>
                <ul class="dropdown-menu">
                    <li><a href="product.php">Figure</a></li>
                    <li><a href="Wallpaper.php">Wallpaper</a>  </li>
                    <li><a href="games.php">Games</a>  </li>
              
                </ul>
                
            </li>
                    
                    <li>
                        <a href="contact.php"><span class="glyphicon glyphicon-earphone"></span>Contact</a>
                    </li>
                    <li>
                        <a href="register1.php"><span class="glyphicon glyphicon-comment"></span>Register</a>
                    </li>
                    <li>
                        <a href="signin.php"><span class="glyphicon glyphicon-comment"></span>Login</a></li>
						<li>
						<a class="page-scroll">
					<?php
                      if (isset($_SESSION['id'])){
                                echo "<form action='logout.php' >
	           <button type=submit class='btn btn-primary'> LOG OUT </button>
	</form>";
         
    }
    else {
		 echo "You have not logged in";

    }
    ?>
</li>	
	</a>
                    
                </ul>
            </div>
            
        </div>
        
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
							<li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="IMW708519046.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="One_Piece_figures_002.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="killer_one_piece_wallpaper_by_al_slync-dauor9y.jpg" alt="">
                            </div>
                             <div class="item">
                                <img class="img-responsive img-full" src="wc1740338.png" alt="">
                            </div>
                             <div class="item">
                                <img class="img-responsive img-full" src="One_Piece_figures_011.jpg" alt="">
                            </div>
							 <div class="item">
                                <img class="img-responsive img-full" src="one-piece-wallpaper-high-quality-1024x576.jpg" alt="">
                            </div>
                        </div>

                       
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">OP Fans Store</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Lim Clarenvcex </strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>About Us</strong>
                    </h2>
                    <hr>
                    
                    <hr class="visible-xs">
                    <p><img src="YWB6Hi29vA3jG.webp" alt="HTML5 Icon"  style="width:500px;height:250px;"></p>
                    <p>Our Website had been published for few months since January 2017.</p>
                    <p>OP Fans Store displayed many things about One Piece and showed how amazing and wonderful about their figure. Besides figure, it also showed some things such as games, wallpaper.  </p>
					<p> Our purpose of the website is sharing this funny and interesting anime to those people that doesnt know about One Piece.</p>
					<p>Because the people that loved One Piece anime were getting more and more so we decided to share the happiness to those people</p>
                    <p> One Piece's lover can come visit our website and view some amazing things about One Piece.</p>
                </div>
            </div>
        </div>

        <div class="row">
            

    </div>
  

    <footer>
        <div class="container">
            <div class="row">
                
                    <p align="left"><img src="one_piece_banner_by_youko_shirokiba-d32cqw4.jpg" width="1140" height="220" alt=""/></p>
					
                <audio controls autoplay>
  
  <source src="One Piece OST - The Very Very Very Strongest [extended].mp3" type="audio/mpeg">
 
</audio>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
