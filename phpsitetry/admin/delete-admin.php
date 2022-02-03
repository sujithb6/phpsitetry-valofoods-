<?php include('partials/menu.php'); 



$id = $_GET["id"];

$sql = "DELETE FROM tbl_user WHERE id = $id";

$res = mysqli_query($conn, $sql);

if($res==TRUE)
{
   $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
   header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
    $_SESSION['delete'] = "<div class='fail'>Admin Deletion Failed.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}


?>