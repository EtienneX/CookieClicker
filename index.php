<?php
session_start();
include "functions.php";

if (isset($_GET['site'])){
  if (($_GET['site']=="register"))
	{
    include 'Templates/reg.html.php';
  }
  elseif(($_GET['site']=="login"))
  {
    include 'Templates/login.html.php';
  }
  elseif(($_GET['site']=="logout")) {
    Logout();
  }
  elseif(($_GET['site']=="shop")) {
    include 'Templates/shop.html.php';
  }
  else
  {
    include 'Templates/err.html.php';
  }
}
else
{
  include 'Templates/index.html.php';
}
 ?>
