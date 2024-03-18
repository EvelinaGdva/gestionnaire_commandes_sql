<?php
session_start();

if (isset($_SESSION["user"])) {
   header("Location: ../Controller/index.php");
   exit; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href='../CSS/index.css' rel="stylesheet">
</head>

<body>
    <div class="container login-container">

        <?php
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            

            require_once "../Data/database.php";
            $conn = new mysqli($host, $username, $password, $database);

            $sql = "SELECT * FROM user WHERE username = '$username'";
            $result = $conn -> query($sql);
            $row = $result->fetch_assoc();
            print_r($row);
            echo $row;
            echo "rrrrrr";
                        if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = $user["id"];
                    header("Location: index.php");
                    exit; 
                } else {
                    echo "<div class='alert alert-danger'>Le mot de passe ne correspond pas</div>";
                }
            }
        }
        ?>

        <form action="login.php" method="post">
            <div class="login"> 
                <h2>CONNEXION</h2><br>
                <div class="form-group">
                    <input type="username" placeholder="Entrez votre nom d'utilisateur :" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Entrez votre mot de passe :" name="password" class="form-control">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Connexion" name="login" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
