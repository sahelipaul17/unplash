<!DOCTYPE HTML>
<html>
<title>Login</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css"/>
<link href="ht<tps://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://use.fontawesome.com/27fb4963e0.js"></script>

<body>
    <!-- header starting -->
    <div class="header fixed-top">
   
    <nav class="navbar navbar-expand-md navbar-light">
     <div class="collapse navbar-collapse" id="myNavbar">
      
      <div class="container-fluid">
        <div class="col-lg-3 sidebar">
       <ul class="navbar-nav mr-auto text-white d-block mx-auto text-center py-3 mb-4">
       <div class="bottom-border pb-3">
       <img src="User_Avatar.png" class="profile">
       <a href="connection.php" method="GET">@username</a>
        <h4>Hello there!</h4>
       </div>
        <li class="nav-item-active">
        
        <li class="nav-item">
        <a href="login.php"><i class="fa fa-sign-in text-white d-block mx-auto text-center py-3 mb-4 current "><span>Login</span></i></a>
        </li>
        <li class="nav-item">
        <a href="dashboard.php"><i class="fa fa-home  text-white d-block mx-auto text-center py-3 mb-4 current"><span>Dashboard</span></i></a>
        </li>
        <li class="nav-item">
        <a href="#"><i class="fa fa-laptop text-white d-block mx-auto text-center py-3 mb-4 current"><span>Components</span></i></a>
        </li>
        <li class="nav-item">
      
        <li class="nav-item">
        <a href="#"><i class="fa fa-table text-white d-block mx-auto text-center py-3 mb-4 current"><span>Tables</span></i></a>
       </li>    
       <li class="nav-item">  
        
        <li class="nav-item">
       <a href="about.php"><i class="fa fa-address-card text-white d-block mx-auto text-center py-3 mb-4 current"><span>About</span></i></a>
       </li>
       <li class="nav-item">
        
        <li class="nav-item">
        <a href="#"><i class="fa fa-users text-white d-block mx-auto text-center py-3 mb-4 current"><span>Settings</span></i></a>
       </li>
        <li class="nav-item">
        <a href="logout.php"><i class="fa fa-sign-out text-white d-block mx-auto text-center py-3 mb-4 current"><span>Logout</span></i></a>
        </li>
     </ul>
    </div>
 </div>
    <div class="col-lg-3">
    <nav class="navbar navbar-inverse fixed-top">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <a href="#"><i class="fa fa-bell text-white d-block mx-auto text-center py-3 mb-4"><span>Notification</span></i></a>
      
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Increment<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Success<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> Business plan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Security</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Email us</a>
        </div>
      </li>
    </ul>
  
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
  
  </div>
 </nav>
<!--background design-->
<section class="background">
 <div class="fluid-container">
   <div class="row">
     <div class="col-4">
   
     </div>
   </div>
 </div>
</section>  

<div class="my-5" id="container">
<div class="row">
    <div class ="Register">
     <form action="connection.php">
     <h1>Register</h1>
     <div class="social_container">
              <a href="#" class="social"><i class="fa fa-facebook"></i></a>
              <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
            </div>
     <span><h4>or sign up your account</h4> </span>
     <label for="fname">Password</label>
     <input type="Fullname" placeholder="Full Name"/>
     <label for="fname">Email</label>
     <input type="email" placeholder="Email"/>
     <label for="fname">Password</label>
     <input type="password" placeholder="Password"/>
     <label for="mobile-number">Mobile-number</label>
     <input type="number" placeholder="Mobile.no"/>
     <label for="plan">plan</label>
     <select id="plan" name="plan">
          <option value="standard">Standard</option>
          <option value="pro">Pro</option>
          <option value="advanced">Advanced</option>
        </select>
     <div class="button">
     <button class="btn btn-primary my-1 my-sm-0 ml-auto">Register</button>
     </div>
    </form>
    </div>
    </div>
    </div>
 <div class="model"></div>

  <!--footer-->        

  
</body>
</html>