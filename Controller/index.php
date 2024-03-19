<?php
session_start();
if (isset($_POST['send'])) {

  $conn = mysqli_connect("localhost","root","","Restot");

  $username = $_POST['username'];
  $password = $_POST['password'];

  require_once "../Data/database.php";

  $sql = "SELECT * FROM admin WHERE username = '$username' and password = 'password'";
  
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result))
  {
    $id = $row['id'];
  }

  if (mysqli_num_rows($result)){
    
    $_SESSION['id'] = $id;
    header("location: ")
  }
}





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restot</title>
    <link href='../CSS/index.css' rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<header>
        <div class="icon-link">
          <i class="fas fa-sign-in-alt"></i>
          <a href="../User/login.php"> CONNEXION </a>
        </div>
</header>

<body>
<div class="wrapper">
  <nav class="main-nav">
    <ul>
      <li>
        <a href="#"> HOME </a>
      </li>
      <li>
        <a href="#"> ABOUT </a>
      </li>
      <li>
        <a href="#"> SERVICE </a>
      </li>
    </ul>
  </nav>
  <div class="main-container">
    <header class="description">
      <h1> RESTOT </h1>
      <h2> Vous voulez voir le suivi de commandes de votre restaurant?  <br> </h2> 
      <a href="#" class="btn"> check out menu </a>
    </header>
  </div>
  <div class="features">
    <div class="box1">
      <i class="fas fa-gift fa-4x"></i> 
      <p>MEXICAN</p> 
    </div>
    <div class="box2"> 
      <i class="fas fa-search fa-4x"></i>
      <p> ITALIAN </p> 
    </div>
    <div class="box3">
      <i class="fas fa-truck fa-4x"></i>
      <p> ASIAN </p> 
    </div>
  </div>

  <footer class="links">
    <div class="web-links">
      <div> <i class="fab fa-facebook"></i> </div>
      <div> <i class="fab fa-twitter-square"></i> </div>
      <div> <i class="fab fa-instagram"></i> </div>
    </div> 
  </footer>
  <div class="credit">
    <p> © Restot | 19th March 2024 </p>
  </div>
</div>
</body>
</html>
