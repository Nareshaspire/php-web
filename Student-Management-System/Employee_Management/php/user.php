<!-- this is user page display information about login user infomation when ever user login credentials are accurate-->

<?php    
    include '../includes/header.php';  
    include('config.php');
?> 
<div class="container-fluid p-5 bg-info text-white text-center">
  <h1>welcome</h1>
  <p>Welcome to user-page</p> 
</div>
<div class="h-100 d-flex align-items-center">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../images/user-image.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Hello there</h5>
    <p class="card-text"></p>
    <a href="login.php" class="btn btn-primary">Go Back</a>
  </div>
</div>
</div>

<?php include '../includes/footer.php';?>