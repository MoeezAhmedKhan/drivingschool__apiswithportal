<?php
 $currentFile = $_SERVER["SCRIPT_NAME"];
      $parts = Explode('/', $currentFile);
      $currentFile = $parts[count($parts) - 1];    
?>

<html>
    <head>

    </head>
    <body>
        
     <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
              <div class="brand-logo"></div>
              <h2 class="brand-text mb-0">Driving School</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather align-justify d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
<!--           <li class=" nav-item"><a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            <ul class="menu-content">
            <?php if($currentFile=="index.php"){?>
              <li class="active nav-item"><a href="index.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
              </li>
             <?php }else{ ?>
              <li class="nav-item"><a href="index.php"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
              </li>
             <?php } ?>
            </ul>
          </li> -->
          
          </li>
         
         
           <li class=" navigation-header"><span>Data</span>
          </li>
            
           <?php if($currentFile=="index.php"){?>
          <li class="active nav-item"><a href="index.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Analytics</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="index.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Analytics</span></a>
          </li>
           <?php } ?>
         
    
          <li class=" navigation-header"><span>Enter Data Options</span>
          </li>
            
           <?php if($currentFile=="addquestion_category.php"){?>
          <li class="active nav-item"><a href="create_teachers_account.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Create teacher account</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="create_teachers_account.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Create teacher account</span></a>
          </li>
           <?php } ?>
        
         <?php if($currentFile=="add_questions.php"){?>
          <li class="active nav-item"><a href="add_lesson.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Lesson</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="add_lesson.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Lesson</span></a>
          </li>
           <?php } ?>
           
           <?php if($currentFile=="add_questions.php"){?>
          <li class="active nav-item"><a href="add_lesson_hours.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Lesson hours</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="add_lesson_hours.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Lesson hours</span></a>
          </li>
           <?php } ?>
           
           <?php if($currentFile=="add_questions.php"){?>
          <li class="active nav-item"><a href="terms.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Terms and condition</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="terms.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Terms and condition<</span></a>
          </li>
           <?php } ?>
           
           
             <?php if($currentFile=="addpackages.php"){?>
          <li class="active nav-item"><a href="addpackages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Package </span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="addpackages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Package </span></a>
          </li>
           <?php } ?>
           
          
           
           
          <!--  <?php if($currentFile=="opengym.php"){?>-->
          <!--<li class="active nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->

          <!--<?php if($currentFile=="addshedule.php"){?>-->
          <!--<li class="active nav-item"><a href="addshedule.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Exercises</span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addshedule.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Exercises</span></a>-->
          <!--</li>-->
          <!--<?php } ?>-->
          
          <!--<?php if($currentFile=="addclassess.php"){?>-->
          <!--<li class="active nav-item"><a href="addpackages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Classes </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addclasses.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add Classes </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
          <!-- <?php if($currentFile=="addaboutus.php"){?>-->
          <!--<li class="active nav-item"><a href="addaboutus.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add About Us </span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addaboutus.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Add About Us </span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
          
          <!-- <?php if($currentFile=="addnewProduct.php"){?>-->
          <!--<li class="active nav-item"><a href="addnewProduct.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">New Product</span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addnewProduct.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">New Product</span></a>-->
          <!--</li>-->
          <!--<?php } ?>-->
          
          
          <!-- <?php if($currentFile=="addslider.php"){?>-->
          <!--<li class="active nav-item"><a href="addslider.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Slider Product</span></a>-->
          <!--</li>-->
          <!-- <?php }else{ ?>-->
          <!--  <li class=" nav-item"><a href="addslider.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Slider</span></a>-->
          <!--</li>-->
          <!--<?php } ?>-->
          
          
          
          <li class=" navigation-header"><span>View the Details</span>
          </li>
          
          
             <?php if($currentFile=="add_questions.php"){?>
          <li class="active nav-item"><a href="payment_log.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Payment History</span></a>
          </li>
           <?php }else{ ?>
            <li class=" nav-item"><a href="payment_log.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Payment History</span></a>
          </li>
           <?php } ?>
          
          
          
          <?php if($currentFile=="managecat.php"){?>
           <li class="active nav-item"><a href="view_teachers.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Teachers</span></a>
          </li>
          <?php }else{ ?>
             <li class=" nav-item"><a href="view_teachers.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Teachers</span></a>
          </li>
           <?php } ?>
           
           
           <?php if($currentFile=="managecat.php"){?>
           <li class="active nav-item"><a href="view_students.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Students</span></a>
          </li>
          <?php }else{ ?>
             <li class=" nav-item"><a href="view_students.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Students</span></a>
          </li>
           <?php } ?>
           
           <?php if($currentFile=="managecat.php"){?>
           <li class="active nav-item"><a href="view_lesson.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Lessons</span></a>
          </li>
          <?php }else{ ?>
             <li class=" nav-item"><a href="view_lesson.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Lessons</span></a>
          </li>
           <?php } ?>
           
           
           <?php if($currentFile=="managecat.php"){?>
           <li class="active nav-item"><a href="view_lesson_hours.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Lesson Hours</span></a>
          </li>
          <?php }else{ ?>
             <li class=" nav-item"><a href="view_lesson_hours.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Lesson Hours</span></a>
          </li>
           <?php } ?>
           
           
           <?php if($currentFile=="managecat.php"){?>
           <li class="active nav-item"><a href="view_terms.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Terms</span></a>
          </li>
          <?php }else{ ?>
             <li class=" nav-item"><a href="view_terms.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Terms</span></a>
          </li>
           <?php } ?>
           
            <?php if($currentFile=="managecat.php"){?>
           <li class="active nav-item"><a href="view_packages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Packages</span></a>
          </li>
          <?php }else{ ?>
             <li class=" nav-item"><a href="view_packages.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">View Packages</span></a>
          </li>
           <?php } ?>
          
          
        
           
           
              
           
          <!--   <?php if($currentFile=="transaction_records.php"){?>-->
          <!-- <li class="active nav-item"><a href="transaction_records.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Transactions</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="transaction_records.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender"> Transactions</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
          <!--<?php if($currentFile=="opengym.php"){?>-->
          <!-- <li class="active nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="opengym.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Open Gym</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->



          
           
           
          <!--<?php if($currentFile=="viewcategories.php"){?>-->
          <!-- <li class="active nav-item"><a href="viewcategories.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Category</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="viewcategories.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Category</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->


          <!-- <?php if($currentFile=="SubCat.php"){?>-->
          <!-- <li class="active nav-item"><a href="SubCat.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sub Category</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="SubCat.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sub Category</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
          <!--  <?php if($currentFile=="manageSliders.php"){?>-->
          <!-- <li class="active nav-item"><a href="manageSliders.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sliders</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="manageSliders.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Sliders</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->
           
           
          <!--<?php if($currentFile=="managePoints.php"){?>-->
          <!-- <li class="active nav-item"><a href="managePoints.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Points</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="managePoints.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Manage Points</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->


          <!--   <?php if($currentFile=="SendNotifications.php"){?>-->
          <!-- <li class="active nav-item"><a href="SendNotifications.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Notifications</span></a>-->
          <!--</li>-->
          <!--<?php }else{ ?>-->
          <!--   <li class=" nav-item"><a href="SendNotifications.php"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Calender">Notifications</span></a>-->
          <!--</li>-->
          <!-- <?php } ?>-->




          
          
          
          
          
          
          
        
             
        </ul>
      </div>
    </div>
    
    
    </body>
</html>