<?php 
	session_start();
    include "db.php";
    include "header1.php";
    error_reporting(0);
    $nlog='d-none';
    $log='d-block';
   $email= $_SESSION['email'];
   if($_SESSION['email']==true){
    $log='d-none';
    $nlog='d-block';
   }
   else{
   	
   }
   $query="SELECT * FROM Users WHERE Email ='$email' ";
  $result=mysql_query($query);
  $final=mysql_fetch_assoc($result);
  ?>

<body onload="onfun()">
    <div class="heroimg">
        <!--Nav Bar-->
        <nav class="navbar navbar-expand-lg  sticky-top" >
            <!-- Brand -->
            <a href="#" class="nav-head"><img class="logo-img" src="imgs/logo.png" alt="logo">&nbsp; Tours & Travels</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars "></i>
            </button>
          
            <!-- Navbar links -->
            <div class="collapse navbar-collapse ml-5" id="navbarNav">
              <ul class="navbar-nav " >
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tours</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li> 
                 
                  <li class="nav-item"  >
                    <a class="nav-link <?php echo $nlog; ?>"  href="logout.php">Logout</a>
                  </li>
              <li class="nav-item">
                    <a class=" ml-5 <?php echo $nlog; ?>"  href="edit_user.php?uid=<?php echo $final['Uid']; ?>">
                    <img class='img-circle rounded-circle position-absolute user_img' width="60" height="60" src="imgs/<?php echo $final['Picture']; ?>" alt="img"></a>
                  </li>
                <li class="nav-item <?php echo $log; ?> " ><a class=" nav-link"  href="signup.php"><i class="fas fa-user"></i>&nbsp;Sign Up</a> </li>
                <li class="nav-item <?php echo $log; ?>"> <a class=" nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i>&nbsp;   Login</a></li>
               
              </ul>
            </div> 
          </nav>