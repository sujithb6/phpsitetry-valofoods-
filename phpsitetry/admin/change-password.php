<?php include('partials/menu.php'); ?>


    
<html>
    <head>
        <title>Change password</title>
        <link rel="stylesheet" href="../css/admin.css">
</head>

<body class="signup-page">

<div class="signup-data">
    <h1>Change password</h1>
    <br/>

    <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }
    ?>


    <form aciton="" method="POST">

    Current password : 
    <input type="password" name="current_password" placeholder="Current password" >
<br/>
<br/>
   New password :  
    <input type="password" name="new_password" placeholder="New password"   >
<br/>
<br/>
Confirm password :  
    <input type="password" name="confirm_password" placeholder="Confirm password"   >
    <br/>
    <br/>
  
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <input type="submit" name="submit" value="Change password" class="change-password-btn">
<br/>
<br/>

</form>
</body>
</html>


<?php 
     if(isset($_POST['submit']))
     {
         $id = $_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

       $sql = "SELECT * FROM  tbl_user WHERE id =$id AND password='$current_password;";
             

            
             $res = mysqli_query($conn, $sql);

             if($res==TRUE)
             {
                $count=mysqli_num_rows($res);
                if($count==1)
                {
                    if($new_password==$confirm_password)
                    {
                        echo "Password";
                    }
                    else
                        {
                         $_SESSION['password-mismatch']="<div class='error'>password did not match.</div>";
                         header("Location:".SITEURL."admin/manage-admin.php"); 
                        }
                }
                else
                {
                    $_SESSION['user-not-found']="<div class='error'>User not found.</div>";
                    header("Location:".SITEURL."admin/manage-admin.php");
                }
             }
            
     }

?>
