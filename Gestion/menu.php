<?php 

    include('../Data/database.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Food Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/index.css">
    </head>
    
    <body>
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="adminController.php">Admin</a></li>
                    <li><a href="categoryController.php">Category</a></li>
                    <li><a href="foodController.php">Food</a></li>
                    <li><a href="orderController.php">Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
