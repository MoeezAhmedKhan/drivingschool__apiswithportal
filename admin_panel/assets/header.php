<?php
 $username = 'User';
include('connection.php');
session_start();
if(isset($_SESSION['userID'])){
    $userid = $_SESSION['userID'];
    $profileLink = '';
    $sql = "SELECT `id`, `First_name`, `Last_name`, `role_id`, `email`, `Phone`, `City`, `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`, `created_at` FROM `users` WHERE `id` = '$userid'";
    $result = mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($result)){
        $username = $row['First_name'];
        $profileLink = $row['profilepic'];
        //echo "<script>alert('$username')</script>";
    }

}else{
  
    header("location:auth-login.php");
   

}
?>

<html>
    <head>

    </head>
    <style>
    #btn-togle
    {
        border:none !important;
    }
    /*#new_nav {*/
    /*margin-right: 19px !important;*/
    /*width:90% !important;*/
    /* margin: 0 auto; */
    /*}*/
    
    
    @media (max-width: 400px) 
    {
	    #new_nav {
	    margin-right: 19px !important;
	    width:90% !important;
	     margin: 0 auto; 
	     background-color:black;
    }
    }
    /*.navbar-container{*/
    /*    	     background-color:blue !important;*/
    /*    	     border:2px solid yellow;*/

    /*}*/
    </style>
    <body>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
      

                       <div class="nav-item nav-toggle">
                           <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                               <span style="font-size:30px;cursor:pointer" >&#9776;</span>
                             </a>
                           </div>

             
            </div>
            <ul class="nav navbar-nav float-right">
              
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
             
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo "$username";  ?></span><span class="user-status">Available</span></div><span></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="logout.php"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    </body>
</html>

<script>
function openNav() {
    alert('aaa');
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>