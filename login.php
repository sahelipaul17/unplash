<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
<link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://use.fontawesome.com/27fb4963e0.js"></script>
</head>
<body>
<div class="my-5" id="container">
    <div class="row">
    <div class ="sign-in fixed-top">
     <form action="connection.php">
     <h1>Login</h1>
     <div class="social_container">
              <a href="#" class="social"><i class="fa fa-facebook"></i></a>
              <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
            </div>
     <span><h4>use your account</h4> </span>
     <label for="fname">Email</label>
     <input type="email" placeholder="Email"/>
     <label for="fname">Password</label>
     <input type="password" placeholder="Password"/>
     <a href="#">Forget your password?</a>
     <button>Signin</button>
     <button>Logout</button>
    </form>
    </div>
    </div>
    </div>
<?php
if($_POST["fullname"]) {
?>
Welcome <?php echo $_POST["fullname"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>