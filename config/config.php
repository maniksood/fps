<?php 
    ob_start();
    session_start();
    mysql_connect("localhost","root","");
    mysql_select_db("fps2");
    error_reporting(0);
 ?>