<?php

$id = $_GET["id"];

$sql = "DELETE FROM tbl_user WHERE id = $id";

$res = mysqli_query($conn, $sql);

if($res==FALSE)
{
   $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
   header('location:'.SITEURL.'admin/login.php');
}

?>