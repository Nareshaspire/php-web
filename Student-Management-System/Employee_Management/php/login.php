
<?php    
    include '../includes/header.php';  
    include 'db_conn.php';
?> 


<div class="container-fluid p-5 bg-info text-white text-center">
  <h1>welcome</h1>
  <p>Welcome to login page</p> 
</div>
  <div class="wrapper">
        <div class="logo">
            <img src="../images/profile-img.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            EMS-Login
        </div>
        <form class="p-3 mt-3" method="post" action="logintest.php" name="signin-form">
           
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" class = "form-control" name="name" id="username" placeholder="enter username" required />
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="passcode" placeholder="enter password" required />
            </div>
          
            <div class="form-field d-flex align-items-center"> 
           <!--   <a href="logintest.php" class="btn btn-info" name = "login" role="button">Login</a> -->
              <input type="submit">
              
            </div>
        </form>
        <div class="text-center fs-6">
            <a href="">Forget password?</a> or <a href="register.php">Sign up</a>
        </div>
    </div>

  
  <?php include '../includes/footer.php';?>
