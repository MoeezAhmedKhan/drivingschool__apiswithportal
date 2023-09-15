<?php include('assets/header.php') ?>

<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->

<?php

if(isset($_GET['Massage'])){
    if($_GET['Massage'] == 'Sucessfully added new area.'){
       echo "<script>alert('Sucessfully added new area.')</script>";
       header("Refresh: 1; url='view_teachers.php'");

       
     }else{
        echo "<script>alert('Sucessfully added new category.')</script>";
     }
   
}   
?>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-semi-dark/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:22:57 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Form Validation - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->

    
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include('assets/Site_Bar.php') ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Edit Teacher</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Teacher
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">-->
          <!--  <div class="form-group breadcrum-right">-->
          <!--    <div class="dropdown">-->
          <!--      <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>-->
          <!--      <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="content-body"><!-- Simple Validation start -->
<section class="simple-validation">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Edit</h4>
				</div>
				<div class="card-content">
					<div class="card-body">
					<form class="form-horizontal" method="POST" enctype="multipart/form-data">
					    
					    
					    <?php
					    
					        require_once('assets/connection.php');
					        $id = $_GET["Id"];
					        $select = "SELECT * FROM `users` WHERE id = '$id'";
					        $query = mysqli_query($conn,$select);
					        $arr = mysqli_fetch_array($query)
					    
					    ?>
					    
					    
							<div class="row">
							 
								
						<!--<div class="col-sm-12">-->
						<!--	<div class="form-group">-->
						<!--		<div class="controls">-->
      <!--                             <div class="controls">-->
      <!--                                 <LABEL>Id</LABEL>-->
      <!--                             <input type="text" name="tid" disabled disabled class="form-control" value="<?php echo $arr[0] ?>" placeholder="User Id">-->
      <!--                              </div>-->
    		<!--					</div>-->
    		<!--				</div>-->
    		<!--	    	</div>-->
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>First name</label>
                                   <input type="text" name="fname" class="form-control" value="<?php echo $arr['First_name'] ?>" placeholder="Enter First name">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			        <div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Last name</label>
                                   <input type="text" name="lname" class="form-control" value="<?php echo $arr['Last_name'] ?>" placeholder="Enter Last name">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	 <div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Role Id</label>
                                   <input type="text" disabled class="form-control" value="<?php echo $arr['role_id'] ?>" placeholder="Role id">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Email</label>
                                      <input type="text" name="email" class="form-control" value="<?php echo $arr['email'] ?>" placeholder="Enter email">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	
    			    		<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Phone</label>
                                   <input type="text" name="phone" class="form-control" value="<?php echo $arr['Phone'] ?>" placeholder="Enter phone">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>City</label>
                                   <input type="text" name="city" class="form-control" value="<?php echo $arr['City'] ?>" placeholder="Enter City">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			        <div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Address</label>
                                   <input type="text" name="address" class="form-control" value="<?php echo $arr['Address'] ?>" placeholder="Enter Address">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Zipcode</label>
                                   <input type="text" name="zipcode" class="form-control" value="<?php echo $arr['Zip_code'] ?>" placeholder="Enter Zipcode">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	 <div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Driving license Front Image</label>
                                        <input type="file" name="new_front" value="<?php echo $arr['Driving_license_front_image'] ?>">
                                        <input type ="hidden" name="old_front" value="<?php echo $arr['Driving_license_front_image'] ?>">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Driving license Rear Image</label>
                                       <input type="file" name="new_rear" value="<?php echo $arr['Driving_license_rear_image'] ?>">
                                        <input type ="hidden" name="old_rear" value="<?php echo $arr['Driving_license_rear_image'] ?>">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	 <div class="col-sm-12">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Password</label>
                                   <input type="text" name="password" class="form-control" value="<?php echo $arr['password'] ?>" placeholder="Enter password">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	<div class="col-sm-12">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="active">active</option>
                                            <option value="inactive">inactive</option>
                                        </select>
                                    </div>
    							</div>
    						</div>
    			    	</div>

                      <div class="col-sm-12">
                          <button type="Submit" name="teacher_edit_btn"  class="btn btn-primary">Submit</button>
                     </div>
						
					</div>
					</form>
					
					
					<?php
					
					
					
					    if(isset($_POST['teacher_edit_btn']))
                        {
                              require_once('assets/connection.php');
                        
                              $fname = $_POST['fname']; 
                              $lname = $_POST['lname']; 
                              $email = $_POST['email']; 
                              $phone = $_POST['phone']; 
                              $city = $_POST['city']; 
                              $address = $_POST['address'];
                              $zipcode = $_POST['zipcode'];
                              $password = $_POST['password'];
                              $status = $_POST['status'];
                              
                              
                             
                             if(empty($_FILES["new_front"]["name"]))
                             {
                                 $filewithnewname =  $_POST['old_front'];
                             }
                             elseif(isset($_FILES["new_front"]["name"]))
                             {
                                 
                                 /*front image*/
                                  $target_dir = "Uploads/";
                                  $target_file = $target_dir . basename($_FILES["new_front"]["name"]);
                                  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                  $filewithnewname =  date("Ymdis")."LIC.".$imageFileType;
                                  
                                  $front_type = $_FILES['new_front']['type']; 
                                  $front_size = $_FILES['new_front']['size']; 
                                  $front_temp_loc = $_FILES['new_front']['tmp_name']; 
                                 
                             }
                             
                             if(empty($_FILES["new_rear"]["name"]))
                             {
                                 $filewithnewname2 =  $_POST['old_rear'];
                             }
                             elseif(isset($_FILES["new_rear"]["name"]))
                             {
                                 
                                 /*rear image*/
                                  $target_dir = "Uploads/";
                                  $target_file2 = $target_dir . basename($_FILES["new_rear"]["name"]);
                                  $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
                                  $filewithnewname2 =  date("Ymdis")."LIC.".$imageFileType2;
                                  
                                  $front_type2 = $_FILES['new_rear']['type']; 
                                  $front_size2 = $_FILES['new_rear']['size']; 
                                  $front_temp_loc2 = $_FILES['new_rear']['tmp_name']; 
                                 
                             }
                                  
                              $update = "UPDATE `users` SET `First_name`= '$fname',`Last_name`= '$lname',`email`= '$email',
                              `Phone`= '$phone',`City`= '$city',`Address`= '$address',`Zip_code`= '$zipcode',`Driving_license_front_image`= '$filewithnewname',`Driving_license_rear_image`= '$filewithnewname2',`password`= '$password',`Status`= '$status'
                              WHERE id = '$id'";
                               $update_query = mysqli_query($conn,$update);
                              if($update_query)
                              {
                                  if(isset($_FILES["new_front"]["name"]))
                                  {
                                      move_uploaded_file($front_temp_loc,$target_dir.$filewithnewname);
                                      unlink($target_dir.$_POST['old_front']);
                                  }
                                  if(isset($_FILES["new_rear"]["name"]))
                                  {
                                      move_uploaded_file($front_temp_loc2,$target_dir.$filewithnewname2);
                                      unlink($target_dir.$_POST['old_rear']);
                                  }
                                  
                                  ?>
                                    <script>alert("Teacher record Updated");
                                    window.location.href = "view_teachers.php";
                                    </script>
                                 <?php
                              }
                        }
					    

                        
                    ?>


					
					
					
					
					
					
					
					
					
					
					
					
					
					
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-- Input Validation end -->


<!-- Input Validation end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="feather icon-x"></i></a><a class="customizer-toggle" href="#"><i class="feather icon-settings fa fa-spin fa-fw white"></i></a><div class="customizer-content p-2">
  <h4 class="text-uppercase mb-0">Theme Customizer</h4>
  <small>Customize & Preview in Real Time</small>
  <hr>
  <!-- Menu Colors Starts -->
  <div id="customizer-theme-colors">
    <h5>Menu Colors</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-primary selected" data-color="theme-primary"></li>
      <li class="color-box bg-success" data-color="theme-success"></li>
      <li class="color-box bg-danger" data-color="theme-danger"></li>
      <li class="color-box bg-info" data-color="theme-info"></li>
      <li class="color-box bg-warning" data-color="theme-warning"></li>
      <li class="color-box bg-dark" data-color="theme-dark"></li>
    </ul>
  </div>
  <!-- Menu Colors Ends -->
  <hr>
  <!-- Theme options starts -->
  <h5 class="mt-1">Theme Layout</h5>
  <div class="theme-layouts">
    <div class="d-flex justify-content-start">
      <div class="mx-50 lidht">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="" checked>
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Light</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50 dark">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="dark-layout">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Dark</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50 semi-dark">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="layoutOptions" value="false" class="layout-name" data-layout="semi-dark-layout">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Semi Dark</span>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
  <!-- Theme options starts -->
  <hr>

  <!-- Collapse sidebar switch starts -->
  <div class="collapse-sidebar d-flex justify-content-between">
    <div class="collapse-option-title">
      <h5 class="pt-25 collapse_sidebar">Collapse Sidebar</h5>
      <h5 class="pt-25 collapse_menu d-none">Collapse Menu</h5>
    </div>
    <div class="collapse-option-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <!-- Collapse sidebar switch Ends -->
  <hr>

  <!-- Navbar colors starts -->
  <div id="customizer-navbar-colors">
    <h5>Navbar Colors</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-white border selected" data-navbar-default=""></li>
      <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
      <li class="color-box bg-success" data-navbar-color="bg-success"></li>
      <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
      <li class="color-box bg-info" data-navbar-color="bg-info"></li>
      <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
      <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
    </ul>
    <hr>
  </div>
  <!-- Navbar colors starts -->
  <!-- Navbar Type Starts -->
  <div id="navbar-type">
    <h5 class="navbar_type">Navbar Type</h5>
    <h5 class="menu_type d-none">Menu Type</h5>
    <div class="navbar-type d-flex justify-content-start">
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Hidden</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-static">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Static</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-sticky">
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Sticky</span>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="vs-radio-con vs-radio-primary">
            <input type="radio" name="navbarType" value="false" id="navbar-floating" checked>
            <span class="vs-radio">
              <span class="vs-radio--border"></span>
              <span class="vs-radio--circle"></span>
            </span>
            <span class="">Floating</span>
          </div>
        </fieldset>
      </div>
    </div>
    <hr>
  </div>
  <!-- Navbar Type Starts -->

  <!-- Footer Type Starts -->
  <h5>Footer Type</h5>
  <div class="footer-type d-flex justify-content-start">
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="footerType" value="false" id="footer-hidden">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">Hidden</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="footerType" value="false" id="footer-static" checked>
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">Static</span>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="vs-radio-con vs-radio-primary">
          <input type="radio" name="footerType" value="false" id="footer-sticky">
          <span class="vs-radio">
            <span class="vs-radio--border"></span>
            <span class="vs-radio--circle"></span>
          </span>
          <span class="">Sticky</span>
        </div>
      </fieldset>
    </div>
  </div>
  <!-- Footer Type Ends -->
  <hr>

  <!-- Hide Scroll To Top Starts-->
  <div class="hide-scroll-to-top d-flex justify-content-between py-25">
    <div class="hide-scroll-title">
      <h5 class="pt-25">Hide Scroll To Top</h5>
    </div>
    <div class="hide-scroll-top-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
      </div>
    </div>
  </div>
  <!-- Hide Scroll To Top Ends-->
</div>

    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <!--<div class="buy-now"><a href="../../../../../../external.html?link=https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy Now</a>-->

    <!--</div>-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


















    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-semi-dark/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:22:57 GMT -->
</html>
<script src="jsfiles/functions.js"></script>
