<?php 
include "connecction.php";
    session_start();

    session_unset();
    session_destroy();

header("location:sign.php");

?>