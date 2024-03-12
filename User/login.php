<?php
session_start();

if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <div class="container login-container">

        <?php
        if (isset($_POST["login"])) {
            //connexion avec nom & mot de passe
           $full_name = $_POST["full name"];
           $password = $_POST["password"];

            require_once "database.php";
            $sql = "SELECT * FROM user WHERE full_name = '$full_name'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Le mot de passe ne correspond pas</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Email ne correspond pas</div>";
            }
        }
        ?>

<form action="login.php" method="post">
            <div class="login"> 
                <h2>CONNEXION</h2><br>
                <div class="form-group">
                    <input type="email" placeholder="Entrez votre email :" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Entrez votre mot de passe :" name="password" class="form-control">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Connexion" name="login" class="btn btn-primary">
                </div>
                <div><br><p>Pas encore inscrit ? <a href="registration.php">S'enregister</a></p></div>
            </div>
        </form>
    </div>
</body>
</html>
