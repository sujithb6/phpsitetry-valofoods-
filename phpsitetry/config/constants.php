<?php

session_start();


define('SITEURL' ,'http://valofoods.epizy.com/');
define('LOCALHOST', 'sql311.epizy.com');
define('DB_USERNAME','epiz_30577301');
define('DB_PASSWORD', 'xLFkrhZOrbWNbbH');
define('DB_NAME', 'epiz_30577301_phpsitetry');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
            $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

            ?>