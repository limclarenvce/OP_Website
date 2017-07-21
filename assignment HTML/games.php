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

    <title>Games</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/HTML.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    
</head>

<body>

    <div class="brand">Games</div>


  
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
	</a>
                </ul>
            </div>
            
        </div>
        
    </nav>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>New Games</strong>
                    </h2>
                    <hr>
                    
                </div>
                
                <section id="figure" class="container content-section text-center">
        
        

        
        <br><br>     <br><br> <br><br>
     
        <h1>One Piece Burning Blood</h1>
        <p>One Piece: Burning Blood is a fighting video game based on One Piece developed by Spike Chunsoft and published by Bandai Namco Entertainment for the PlayStation 4, PlayStation Vita, Xbox One, and Microsoft Windows. It was released on April 2016</p>
        <p> <a href="header.jpg"> <img align="center" src="header.jpg" width="700" height="300" alt=""> </a>
        <p><video width="1000" height="500" controls>
  <source src="One Piece- Burning Blood - Launch Trailer - PS4.mp4" type="video/mp4">
            </video></p>
            
            <h2>One Piece Pirate Warriors 3</h2>
            <p>One Piece: Pirate Warriors 3 is an action video game, developed by Omega Force, marketed by Bandai Namco Entertainment for the PlayStation 3, PlayStation 4, PlayStation Vita, and Microsoft Windows.It was released on March 26,2015</p>
         <p> <a href="header (1).jpg"> <img align="center" src="header (1).jpg" width="700" height="300" alt=""> </a>
         <p> <video width="1000" height="500" controls>
  <source src="One Piece- Pirate Warriors 3 - Launch Trailer.mp4" type="video/mp4">
             </video></p>
        
             <h3>One Piece: Unlimited World Red </h3>
             <p>One Piece: Unlimited World Red is an Action/Adventure video game based on the famous One Piece manga and anime. This is the thirty-sixth video game based on the series, and the fifth title in the Unlimited sub-series. It was released on November 21, 2013</p>
             <p> <a href="maxresdefault (1).jpg"> <img align="center" src="maxresdefault (1).jpg" width="700" height="300" alt=""> </a>
             <p><video width="1000" height="500" controls>
  <source src="One Piece Unlimited World Red - PS3-3DS-PS Vita-Wii U - Journey of the pirate king (English trailer).mp4" type="video/mp4">
                 </video></p>
        
                 
        
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
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

