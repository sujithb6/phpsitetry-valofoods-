<?php include('partials/menu.php'); ?>
<link rel="stylesheet" href="../css/manage-admin.css">

        <div class="main-content">
        <div class="wrapper">
            <br/>
            <h3 class="page-title">Manage Admin</h3>

            <br/>
            <br/>
    <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br/>
            <br/>
            <br/>
            <br/>
            <table class="tbl-primary">
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <?php

                $sql = "SELECT * FROM tbl_user";

                $res = mysqli_query($conn, $sql);

                if ($res ==TRUE){
                    $count = mysqli_num_rows($res);

                    $sn=1;
                    if($count>0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];

                            ?>

                <tr>
                    <td><?php echo$sn++; ?></td>
                    <td><?php echo$full_name; ?></td>
                    <td><?php echo$username; ?></td>
                    <td><a href="<?php echo SITEURL; ?>admin/change-password.php?id=<?php echo $id; ?>" class="btn-change-password">Change Password</a> | <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-update">Update</a> |
                    <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-delete">Delete</a></td> 
                </tr>

                <?php
                        }
                    }
                    else
                    {
                          
                    }
                }
                ?>
                

                
            </table>
</br>        
            </div>
        </div>

       

        <?php 
               if(isset($_SESSION['add']))
               {
                   echo $_SESSION['add'];
                   unset($_SESSION['add']);
               }

               if(isset($_SESSION['delete']))
               {
                   echo $_SESSION['delete'];
                   unset($_SESSION['delete']);
               }

               if(isset($_SESSION['update']))
               {
                   echo $_SESSION['update'];
                   unset($_SESSION['update']);
               }

               if(isset($_SESSION['password-mismatch']))
               {
                   echo $_SESSION['password-mismatch'];
                   unset($_SESSION['password-mismatch']);
               }
               if(isset($_SESSION['user-not-found']))
               {
                   echo $_SESSION['user-not-found'];
                   unset($_SESSION['user-not-found']);
               }
            ?>


        <?php include('partials/footer.php'); ?>



     