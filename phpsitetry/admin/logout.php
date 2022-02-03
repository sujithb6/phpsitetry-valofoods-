<?php

include ('../config/constants.php');


session_destroy();//this will unset the session user


header('location:'.SITEURL.'admin/login.php');


?>