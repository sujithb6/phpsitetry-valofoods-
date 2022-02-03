<?php




if(!isset($_SESSION['user-active']))
{
    $_SESSION['not-active'] = "<div class='fail'>Please login to access panel.</div>";

   header('location:'.SITEURL.'admin/login.php');
}




?>