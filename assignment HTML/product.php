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

    <title>Product</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/HTML.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    
</head>

<body>

    <div class="brand">Product</div>


  
   <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="index.php">OP Fans Store</a>
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
                        <a href="signin.php"><span class="glyphicon glyphicon-comment"></span>Login</a>
                    </li>
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
                </ul>
            </div>
            
        </div>
        
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Action
                        <strong>Figure</strong>
                    </h2>
                    <hr>
                </div>
                
                <section id="figure" class="container content-section text-center">
        <h1>One Piece Figure</h1>
          
        
        <br><br>
        
       <h2> <p><a href="one-piece-figure-gear-fourth-luffy-4681-16329281-c11d53b57293b9e7ac36056d1dea11ff.jpg"> <img align="center" src="one-piece-figure-gear-fourth-luffy-4681-16329281-c11d53b57293b9e7ac36056d1dea11ff.jpg" width="400" height="400" alt=""> </a> <p></h2>
          
    
        <h3><p><a href="one-piece-roronoa-zoro-edition-z-p-o-p-portrait-of-pirates-1-8-scale-figure-1.jpg"> <img align="center" src="one-piece-roronoa-zoro-edition-z-p-o-p-portrait-of-pirates-1-8-scale-figure-1.jpg" width="500" height="400" alt=""> </a> </p></h3>
        
  
        <h4><p> <a href="FIGURE-001994.jpg"> <img align="center" src="FIGURE-001994.jpg" width="400" height="400" alt=""> </a> </p></h4>
       
	   <h5><p> <a href=" Hot-Anime-One-Piece-action-figure-PVC.png"> <img align="center" src=" Hot-Anime-One-Piece-action-figure-PVC.png" width="400" height="400" alt=""> </a> </p></h5>
        
    
  
    </section>

    
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; OP Fans Store 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js">
	
</script>

</body>

</html>
