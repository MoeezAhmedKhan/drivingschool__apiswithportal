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
       header("Refresh: 1; url='view_lesson_hours.php'");

       
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
                <h2 class="content-header-title float-left mb-0">Edit Lesson</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Lesson
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
					<form class="form-horizontal" method="POST">
					    
					    
					    <?php
					    
					        require_once('assets/connection.php');
					        $id = $_GET["Id"];
					        $select = "SELECT * FROM `classes` WHERE id = '$id'";
					        $query = mysqli_query($conn,$select);
					        $arr = mysqli_fetch_array($query)
					    
					    ?>
					    
					    
							<div class="row">
							    
						<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Teacher</label>
                                          <select name="teacherid"  class="form-control">
                                              <?php 
                                                require_once('assets/connection.php');
                                                $user = "SELECT `id`, `First_name`, `Last_name`, `social_id`, `role_id`, `email`, `Phone`, `City`, `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`, `notification_token`, `created_at` FROM `users` WHERE role_id = 1 || role_id = 0";
                                                $run_user = mysqli_query($conn,$user);
                                                $user_row =mysqli_num_rows($run_user);
                                                if($user_row > 0)
                                                {
                                                    while($user_ar = mysqli_fetch_array($run_user))
                                                    {
                                                        
                                                        ?>
                                                        <option value="<?php echo $user_ar['id'] ?>"><?php echo $user_ar['First_name']." ".$user_ar['Last_name'] ?></option>
                                                        <?php
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                                    <option>No Teacher Found</option>
                                                    <?php
                                                }
                                              
                                              ?>
                                          </select>
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Lesson Title</label>
                                          <select name="lessonid"  class="form-control">
                                              <?php 
                                                require_once('assets/connection.php');
                                                $lesson = "SELECT `l_id`, `l_title`, `color` FROM `lessons`";
                                                $run_lesson = mysqli_query($conn,$lesson);
                                                $lessonr_row =mysqli_num_rows($run_lesson);
                                                if($lessonr_row > 0)
                                                {
                                                    while($lesson_ar = mysqli_fetch_array($run_lesson))
                                                    {
                                                        
                                                        ?>
                                                        <option value="<?php echo $lesson_ar['l_id'] ?>"><?php echo $lesson_ar['l_title'] ?></option>
                                                        <?php
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                                    <option>No Lesson Found</option>
                                                    <?php
                                                }
                                              
                                              ?>
                                          </select>
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    		
							 
							 <div class="col-sm-12">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Date</label>
                                        <input type="date" name="date" class="form-control" value="<?php echo $arr['date'] ?>">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    		<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Start Time</label>
                                   <input type="time" name="start" class="form-control" value="<?php echo $arr['start_time'] ?>">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	<div class="col-sm-6">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>End Time</label>
                                   <input type="time" name="end" class="form-control" value="<?php echo $arr['end_time'] ?>">
                                    </div>
    							</div>
    						</div>
    			    	</div>
    			    	
    			    	<div class="col-sm-12">
							<div class="form-group">
								<div class="controls">
                                   <div class="controls">
                                       <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="Void">Void</option>
                                            <option value="Can't Void">Can't Void</option>
                                        </select>
                                    </div>
    							</div>
    						</div>
    			    	</div>

                      <div class="col-sm-12">
                          <button type="Submit" name="lesson_hours_edit_btn"  class="btn btn-primary">Submit</button>
                     </div>
						
					</div>
					</form>
					
					
					<?php
					
					    /*Update Lesson hours*/
					    
					    
					    if(isset($_POST['lesson_hours_edit_btn']))
                        {
                           require_once('assets/connection.php');
                            
                           $teacher = $_POST['teacherid'];
                           $lessonid = $_POST['lessonid'];
                           $date = $_POST['date'];  
                           
                           $start = date_create($_POST['start']);
                           $end = date_create($_POST['end']);
                           
                           $s = date_format($start,"g:i A");
                           $e = date_format($end,"g:i A");
                     
                           
                           $status = mysqli_real_escape_string($conn,$_POST['status']);
                              
                            $query3 = "UPDATE `classes` SET `teacher_id`= '$teacher',`lesson_id`= '$lessonid',`date`= '$date',
                            `start_time`= '$s',`end_time`= '$e',`status`= '$status' WHERE `id`= $id";
                            $run3 = mysqli_query($conn,$query3);
                            if($run3)
                            {
                                ?>
                                <script>alert("Record has been updated");window.location.href="view_lesson_hours.php"</script>
                                <?php 
                            }
                            else
                            {
                                echo mysqli_error($conn);
                            }
                            
                        }
                          
                          
                        
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    
					    

                           
                           /*End*/
                        
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
