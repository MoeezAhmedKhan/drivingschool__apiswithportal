<?php include('assets/header.php') ?>
<!DOCTYPE html>


<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/shepherd-theme-default.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/card-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/tour/tour.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->
  
  <!-- BEGIN: Main Menu-->
    <?php include('assets/Site_Bar.php') ?>

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

    <!-- BEGIN: Header-->
    
    <ul class="main-search-list-defaultlist d-none">
      <li class="d-flex align-items-center"><a class="pb-25" href="#">
          <h6 class="text-primary mb-0">Files</h6></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
          <div class="d-flex">
            <div class="mr-50"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
            </div>
          </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small></a></li>
      <li class="d-flex align-items-center"><a class="pb-25" href="#">
          <h6 class="text-primary mb-0">Members</h6></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
            </div>
          </div></a></li>
      <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
          <div class="d-flex align-items-center">
            <div class="avatar mr-50"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
            <div class="search-data">
              <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
            </div>
          </div></a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
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
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
      <div class="row mb-2">
      <div class="col-md-12">
          <select class="form-control">
              <option>Select</option>
          </select>
      </div>
  </div>
    <div class="row">
      
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
                     <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                               <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As owners FROM `users`";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['owners'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75">Total Customer</p>
                              <h6 class="font-medium-2">
                                  <span>Till Now</span>
                              </h6>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                             <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As teacher FROM `users` where role_id != '2'";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['teacher'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75">Total Teachers</p>
                              <h5 class="font-medium-2">
                                  <span>Till Now</span>
                              </h5>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
           <div class="card-content">
                <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                              <?php
                              $date_raw = date("Y-m-d");
                              $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));
                              $Count = '0';
                                  include('connection.php');
                                  $sql = "SELECT Count(*) As class FROM `class_log`";
                                  $result = mysqli_query($conn,$sql);
                                  $Count = mysqli_fetch_array($result);
                                  $Count = $Count['class'];
                              ?>
                              <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>
                              <p class="text-bold-500 mb-75">Not took classes so far</p>
                              <h5 class="font-medium-2">
                                  <span>Till Now</span>
                              </h5>
                          </div>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                      </div>
                  </div>
                  <hr/>
                  </div>
                  </div>
        </div>
      </div>
      
      <!--<div class="col-lg-3 col-md-6 col-12">-->
      <!--  <div class="card">-->
      <!--     <div class="card-content">-->
      <!--          <div class="card-body">-->
      <!--            <div class="row pb-50">-->
      <!--                <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
      <!--                    <div>-->
      <!--                        <php-->
      <!--                        $date_raw = date("Y-m-d");-->
      <!--                        $oldDate = date('Y-m-d', strtotime('-7 day', strtotime($date_raw)));-->
      <!--                        $Count = '0';-->
      <!--                            include('connection.php');-->
      <!--                            $sql = "SELECT Count(*) As res FROM `restuarant` ";-->
      <!--                            $result = mysqli_query($conn,$sql);-->
      <!--                            $Count = mysqli_fetch_array($result);-->
      <!--                            $Count = $Count['res'];-->
      <!--                        ?>-->
      <!--                        <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>-->
      <!--                        <p class="text-bold-500 mb-75" style="width:100px">utilized</p>-->
      <!--                        <h5 class="font-medium-2">-->
      <!--                            <span>Till Now</span>-->
      <!--                        </h5>-->
      <!--                    </div>-->
      <!--                </div>-->
      <!--                <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
      <!--                </div>-->
      <!--            </div>-->
      <!--            <hr/>-->
      <!--            </div>-->
      <!--            </div>-->
      <!--  </div>-->
      <!--</div>-->
      <div class="col-lg-12 col-md-6 col-12">
        <div class="container-fluide">
                <div class="row">
                  <div class="col-md-12">
                      <div class="card ">
                        <div class="card-header">
                          <h4 class="card-title">Total hours customers have utilized</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table tablesorter" id="">
                              <thead class="text-primary">
                                <tr>
                                  <th>Id</th>
                                  <th>Lesson</th>
                                  <th>Student</th>
                                  <th>Start Hours</th>
                                  <th>End Hours</th>
                                </tr>
                              </thead>
                              <tbody>
                
                                <?php
                                require_once('assets/connection.php');
                                $fetch = "SELECT c.id,c.date,c.start_time,c.end_time,c.status,u.First_name,l.l_title FROM classes c INNER JOIN lessons l on l.l_id = c.lesson_id INNER JOIN class_log cl on cl.class_id = c.id INNER JOIN users u on u.id = cl.student_id";
                                $query = mysqli_query($conn, $fetch);
                                $rec = mysqli_num_rows($query);
                                
                                if($rec > 0)
                                {
                                    while($arr = mysqli_fetch_array($query))
                                    {
                                    //   $start =$arr['start_time'];
                                    //   $end = $arr['end_time'];
                                    //   $diff = date_diff($start,$end);
                                    //   $total_time = $diff->format("%d Day %h Hours %m Minutes %s Seconds");
                                      
                                        echo "<td>{$arr['id']}</td>";
                                        echo "<td>{$arr['l_title']}</td>";
                                        echo "<td>{$arr['First_name']}</td>";
                                         echo "<td>{$arr['start_time']}</td>";
                                        echo "<td>{$arr['end_time']}</td>";
                                    }
                                }
                                else
                                {
                                  echo'<tr>
                                        <td style="text-align:center;">No Record Found</td>
                                      </tr>';
                                }
                
                                ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
      </div>
      
      
  </div>



  <!--<div class="row">-->
      
  <!--    <div class="col-lg-3 col-md-6 col-12">-->
  <!--      <div class="card">-->
  <!--                   <div class="card-content">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row pb-50">-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
  <!--                        <div>-->
                             
  <!--                            <h2 class="text-bold-700 mb-25"></h2>-->
  <!--                            <p class="text-bold-500 mb-75">Canceled Orders</p>-->
  <!--                            <h6 class="font-medium-2">-->
  <!--                                <span>Till Now</span>-->
  <!--                            </h6>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--                <hr/>-->
  <!--                </div>-->
  <!--                </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="col-lg-3 col-md-6 col-12">-->
  <!--      <div class="card">-->
  <!--          <div class="card-content">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row pb-50">-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
  <!--                        <div>-->
                             
  <!--                            <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>-->
  <!--                            <p class="text-bold-500 mb-75">Shipped Orders</p>-->
  <!--                            <h5 class="font-medium-2">-->
  <!--                                <span>Till now</span>-->
  <!--                            </h5>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--                <hr/>-->
  <!--                </div>-->
  <!--                </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="col-md-6 col-12">-->
  <!--      <div class="card">-->
  <!--         <div class="card-content">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row pb-50">-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">-->
  <!--                        <div>-->
                              
  <!--                            <h2 class="text-bold-700 mb-25"><?php echo $Count; ?></h2>-->
  <!--                            <p class="text-bold-500 mb-75">Total delviered items</p>-->
  <!--                            <h5 class="font-medium-2">-->
  <!--                                <span>Live Status</span>-->
  <!--                            </h5>-->
  <!--                        </div>-->
  <!--                    </div>-->
  <!--                    <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--                <hr/>-->
  <!--                </div>-->
  <!--                </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--</div>-->

   

<!--   <div class="row">
    <div class="col-12">
      <div class="card">
          <div class="card-content">
        <div class="card-header">
          <h4 class="mb-0">User Details</h4>
        </div>
        <div class="card-content">
          <div class="table-responsive mt-1">
            <table class="table table-hover-animation mb-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>STATUS</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <!--<div class="buy-now"><a href="../../../../../../external.html?link=https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy Now</a>-->

    <!--</div>-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022<a class="text-bold-800 grey darken-2" href="../../../../../../external.html?link=https://1.envato.market/pixinvent_portfolio" target="_blank">sassolutions.org,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
    
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-semi-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 21:04:21 GMT -->
</html>