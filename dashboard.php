<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="ht<tps://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/27fb4963e0.js"></script>
    <title>Dashboard</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-md navbar-dark">
         <div class="container-fluid">
     <div class="row">
     <!-- sidebar-->
     <div class="col-lg-3 sidebar fixed-top p-2">
      <a href="" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Dashboard</a>
     <div class="bottom-border mr-3">
         <ul classs="navbar-nav flex-column mt-4">
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-general text-white p-3 mb-2  mx-auto text-center current">General</i></a></li>
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-calender text-white p-3 mb-2  mx-auto text-center sidebar-link">Calender</i></a></li>
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-do text-white p-3 mb-2  mx-auto text-center sidebar-link">To-do</i></a></li>
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-message text-white p-3 mb-2 mx-auto text-center sidebar-link">Messages</i></a></li>
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-document text-white p-3 mb-2 mx-auto text-center sidebar-link">Documents</i></a></li>
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-contact text-white p-3 mb-2  mx-auto text-center sidebar-link">Contacts</i></a></li>
             <li class="nav-item-active"><a href="#" class="nav-link"><i class="fa fa-finance text-white p-3 mb-2  mx-auto text-center sidebar-link">Finance</i></a></li>
            
         </ul>
     </div>
    </div>
     <!-- end of sidebar -->
     <!-- top-nav -->
     <div class="col-lg-3 ml-auto navbar navbar-inverse fixed-top">
       <div class="row align-items-center">
           <div class="col-md-4">
               <h4 class="text-wh0ite text-uppercase mb-0"></h4>
           </div>
           <div class="col-md-5">
               <form>
                   <div class="input-group">
                       <input type="text" class="form-control-search-input" placeholder="Search...">
                       <button type="button" class="btn btn-white"><i class="fa fa-search text-danger"></i></button>
                   </div>
               </form>
           </div>
           <div class="col-md-3">
           <ul class="navbar-nav">
               <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-comments-text-muted fa-lg"></i></a></li>
               <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell-text-muted fa-lg"></i></a></li>
               <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-sign-out-alt-text-danger  fa-lg"></i></a></li>
           </ul>
           </div>
       </div>
     </div>
     <!-- end of top-nav -->
     </div>
     </div>
    </div>
  </nav>
  <!-- end of navbar -->

  <!-- model -->
  <div class="model" id="signout">
   <div class="model-dailog">
     <div class="model-content">
     <div class="model-header">
         <h4 class="model-title">Want to leave?</h4>
     </div>
     </div>
    </div>
  </div>
<!-- end of model -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

