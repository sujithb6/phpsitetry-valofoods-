<?php include('../config/constants.php');

?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="login-page">
<section class="navbar">
        <div class="container">
     <div class="logo">
<img src="../images/logo.png" alt="logo" class="img-responsive"/>
     </div>
    </section>
<div class="login-data">
    <h1>Login</h1>
    <br/>
    <?php
     if(isset($_SESSION['login']))
     {
         echo $_SESSION['login'];
         unset ($_SESSION['login']);
     }

    

     if(isset($_SESSION['not-active']))
     {
        echo $_SESSION['not-active'];
        unset ($_SESSION['not-active']);   
     }
     ?>

    <form aciton="" method="POST">
   Username : 
    <input type="text" name="username" placeholder="Username" >
<br/>
<br/>
<br/>
    password : 
    <input type="password" name="password" placeholder="Password">
    <br/>
    <br/>
    <br/>
    <input type="submit" name="submit" value="login" class="login-btn">
    <br/>
    <br/>
    <br/>
    <div class="user-id"><a href="http://valofoods.epizy.com/admin/index.php"><?php if(isset($_SESSION['user-active']))
     {
         echo "presently logged in as  :  ";
         echo $_SESSION['user-active'];
     }?> </a>
     </div>
    <br/>
    <h3>Create an account?<a href="http://valofoods.epizy.com/admin/add-admin.php">Signup</a></h3>
</form>
</div>
</body>
<?php include('partials/footer.php'); ?>
</html>



<?php
    if(isset($_POST['submit']))
     {
          $username = $_POST['username'];
          $password = md5($_POST['password']);
         
          $sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";
          $res = mysqli_query($conn,$sql) ;

          $count = mysqli_num_rows($res);

          if($count==1)
          {
              $_SESSION['login'] = "<span class='success'>Login successfull!</span>";
              $_SESSION['user-active'] = $username;
            
              header('location:'.SITEURL.'admin/index.php');
          }
          else
          {
           
          }
     }
?>


