<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cookie Clicker</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/76bbc5ab55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/layout.css">
    <link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/master.css">
</head>
<body>
<nav style="background-color: rgba(0, 0, 0, 0.73) !important; color:white !important;" class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <a class="navbar-brand" href="index.php">
      <img src="CSS/images/cookie.png" width="50" height="50" alt="logo">
      Cookie Clicker
      </a>
      <div class="container">
		      <button style="color: white !important;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div style="color: white !important;" class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
                <li class='nav-item active'><a href='index.php?site=shop' class='nav-link'>Shop</a></li>
                <!-- <li class='nav-item active'><a href='index.php' class='nav-link'>Home</a></li> -->
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
    <div class="container">
      <?php
        echo $content;
       ?>
   </div>
    <div class="footer">
        <p>© Copyright<a href="#"> Etienne Tot</a></p>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
