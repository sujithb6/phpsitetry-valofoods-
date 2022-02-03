
<?php include('../config/constants.php');

?>

    
<html>
    <head>
        <title>Sign UP</title>
        <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="signup-page">

<section class="navbar">
        <div class="container">
     <div class="logo">
<img src="../images/logo.png" alt="logo" class="img-responsive"/>
     </div>
    </section>

<div class="signup-data">
    <h1>Signup</h1>
    <br/>
    <form aciton="" method="POST">

    Fullname : 
    <input type="text" name="full_name" placeholder="fullname" >
<br/>
<br/>
   Username : 
    <input type="text" name="username" placeholder="Username" >
<br/>
<br/>
    password : 
    <input type="password" name="password" placeholder="Password">
    <br/>
    <br/>
    <br/>
    <input type="submit" name="submit" value="Sign up" class="signup-btn">
<br/>
<br/>

<div class="user-id"><a href="http://valofoods.epizy.com/admin/index.php"><?php if(isset($_SESSION['user-active']))
     {
         echo "presently logged in as  :  ";
         echo $_SESSION['user-active'];
     }?> </a>
     </div>

    <h3>Have an account already?<a href="http://valofoods.epizy.com/admin/login.php">Login</a></h3>
</form>

</body>
</html>




<?php 
     if(isset($_POST['submit']))
     {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

       $sql = "INSERT INTO tbl_user SET 
               full_name='$full_name',
               username='$username',
               password= '$password' ";

            
             $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

             if($res==TRUE)
             {
                 $_SESSION['add']  = "<div class='success '>Admin added succesfully.</div>";
                
                 header("Location:".SITEURL."admin/login.php");
             }
             else
             {
                $_SESSION['add']  = "Adding Failed";
                header("Location:".SITEURL."admin/add-admin.php");
             }
     }

?>


