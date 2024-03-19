<?php 
    include('../Data/database.php');
    session_destroy(); 
    header('location:'.URL.'Controller/login.php');

?>