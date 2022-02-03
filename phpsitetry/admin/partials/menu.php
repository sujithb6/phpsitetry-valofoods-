<?php 

include('../config/constants.php');
include('login-check.php');

?>


<html>
    <head>
        <title>Food Order Website- Home Page</title>
        <link rel="stylesheet" href="../css/admin.css">
        </head>
<body >

        <section class="navbar">
        <div class="container">
     <div class="logo">
<img src="../images/logo.png" alt="logo" class="img-responsive"/>
     </div>

     <div class="menu text-right">
         <ul>
             <li>
                 <a href="index.php" class="Home-tag">Home</a>
             </li>

             <li>
                 <a href="manage-admin.php" class="Admin-tag">Admin</a>
            </li>

             <li>
                <a href="category.php" class="Category-tag">Categories</a>
            </li>

            <li>
                <a href="food.php" class="Foods-tag">Foods</a>
            </li>

            <li>
                <a href="logout.php" class="logout-btn">Logout</a>
            </li>

            <li class="user-id"><?php if(isset($_SESSION['user-active']))
     {
         echo $_SESSION['user-active'];
     }?> 
     </li>

         </ul>
        </div>
         <div class="clearfix"></div>
    </section>