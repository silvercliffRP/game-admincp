<?php
require './include/constants.php';
if(!function_exists('db_connect')){
    function db_connect(){
        $mySqlConn = mysqli_connect("192.168.0.10", "web", "qwe");

        if ($mySqlConn->connect_error) {
            die("Connection failed: " . $mySqlConn->connect_error);
        }else{
            return $mySqlConn;
        }
    }
}
?>