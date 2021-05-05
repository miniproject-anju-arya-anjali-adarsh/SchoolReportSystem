<?php
 require("connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC School</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Quicksand:wght@300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  </head>
  <body>
    <section id="homepage">
      <div class="container">
          <nav class="navbar">
             <h5 class="navbar-brand">ABC</h5>
                 <ul class="navbar-nav ml-auto">
                   <button type="button" id="button" class="button btn-1">Login</button>
                 </ul>
          </nav>
        <div class="row">
          <div class="col-lg-6">
             <h1 class="heading">Welcome To <span>ABC PVT</span></h1>
             <h1 class="heading">SCHOOL</h1>
             <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
          </div>
          <div class="col-lg-6">
            <img src="images/homepage_img.png" class="image" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="about-project">
      <h1 class="h" >About Project</h1>
      <h4 class="h-1">Lorem ipsum dolor sit amet</h4>
      <div class="row r-1">
        <div class="col-lg-6 pic_3">
          <img src="images/pic_3.png" alt="">
        </div>
        <div class="col-lg-6 about">
          <h3 class="h-2">Our Vision</h3>
          <div class="p-2">
            <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
  </section>
  <section id="features">
    <h2 class="feature-head">Features</h2>
    <div class="container-2">
      <div class="box b-1">
        <div class="icon">
          <img class="i-1" src="https://img.icons8.com/wired/64/000000/students.png"/>
        </div>
        <div class="content">
          <h3>View Student</h3>
          <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
      </div>
      <div class="box b-2">
        <div class="icon">
          <img class="i-1" src="https://img.icons8.com/dotty/80/000000/student-registration.png"/>
        </div>
        <div class="content">
          <h3>Add Student</h3>
          <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
      </div>
      <div class="box b-3">
        <div class="icon">
          <img class="i-1" src="https://img.icons8.com/wired/64/000000/remove-user-male.png"/>
        </div>
        <div class="content">
          <h3>Delete Student</h3>
          <p class="feature-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
        </div>
      </div>
    </div>
  </section>
  <footer>
        <div class="footer-content">
          <h5 class="f-c-1">Project Done By </h5>
          <div class="row">
            <div class="col-lg-3 l-1">
              <p class="f-c-2"><i class="las la-female la-32px" ></i>Anju Suresh</p>
            </div>
            <div class="col-lg-3 l-2">
              <p class="f-c-2"><i class="las la-female"></i>E Anjali Shankar</p>
            </div>
            <div class="col-lg-3 l-3">
              <p class="f-c-2"><i class="las la-male"></i>Adarsh S Kumar</p>
            </div>
            <div class="col-lg-3 l-4">
              <p class="f-c-2"><i class="las la-female"></i>Arya Suresh</p>
            </div>
          </div>
        </div>
  </footer>
    <!-- modal section -->
     <div class="bg-modal">
       <div class="modal-contents">
         <div class="close">+</div>
          <img class="pic_2" src="images/pic_2.png" alt="">
          <form method="POST">
            <input type="text" placeholder="Name" name="AdminName" >
            <input type="password" placeholder="Password" name="AdminPassword">
            <button type="submit" class="button" name="SignIn">Sign In</button>
          </form>
       </div>
     </div>
     <script>
       document.getElementById('button').addEventListener("click", function(){
         document.querySelector('.bg-modal').style.display = "flex";
       });
       document.querySelector('.close').addEventListener("click", function(){
         document.querySelector('.bg-modal').style.display = "none";
       });
     </script>
     <?php
     if (isset($_POST['SignIn']))
        {
          $query = "SELECT * FROM `user` WHERE 'username'='$_POST[AdminName]' AND 'password'='$_POST[AdminPassword]'";
          $result = mysqli_query($conn,$query);
          if(mysqli_num_rows($result)==1)
          {
            session_start();
            $_SESSION['adminloginid']=$_POST['AdminName'];
            header("location: panel.php");
          }
          else{
            echo"<script>alert('Incorrect Password');</script>";
          }
        }
      ?>
  </body>
</html>
