<?php
 define('HOST','localhost');
 define('USER','root');
 define('PASS','root');
 define('DB','_user');
 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>