<?php
include('../connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    
                $user_id = $_POST['user_id'];
                $fname = $_POST['fullname'];
                $mobile = $_POST['mobile'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $email = $_POST['email'];
                $zipcode = $_POST['zipcode'];
                $notification_token = $_POST['notification_token'];


                $target_dir = "../Uploads/";
                $target_file = $target_dir . basename($_FILES["profilepic"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                
            $filewithnewname =  rand()."_".date("Ymdis")."_DP.".$imageFileType;  
       if(move_uploaded_file($_FILES["profilepic"]["tmp_name"], $target_dir.$filewithnewname))
       {
           
           $upd_sql = "UPDATE `users` SET `First_name`='$fname',`email`='$email',`Phone`='$mobile',`City`='$city',
           `Address`='$address',`Zip_code`='$zipcode',`notification_token`='$notification_token',`img`='$filewithnewname'
           WHERE `id`='$user_id'";
           $exec_upd_sql = mysqli_query($conn , $upd_sql);
           if($exec_upd_sql){
               $userData = "SELECT `id`, `First_name`,`social_id`, `role_id`, `email`, `Phone`, `City`, 
               `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`,
               `notification_token`, `created_at`, `img` FROM `users` WHERE `id` = '$user_id'";
               $exec_userData = mysqli_query($conn , $userData);
               $row = mysqli_fetch_array($exec_userData);
               
               $temp = [
                   "address"=>$row['Address'],
                   "city"=>$row['City'],
                   "email"=>$row['email'],
                   "fullname"=>$row['First_name'],
                   "notification_token"=>$row['notification_token'],
                   "password"=>$row['password'],
                   "phone"=>$row['Phone'],
                   "role_id"=>$row['role_id'],
                   "user_id"=>$row['id'],
                   "zipcode"=>$row['Zip_code'],
                      "profile_pic"=>$row['img']
                   ];
               
            $data = ["status"=>true,
                "message"=>"Profile updated successfully.",
                "data"=>$temp
                ];
            echo json_encode($data); 
       }
               
           }else{
               
               $upd_sql = "UPDATE `users` SET `First_name`='$fname',`email`='$email',`Phone`='$mobile',`City`='$city',
           `Address`='$address',`Zip_code`='$zipcode',`notification_token`='$notification_token' 
           WHERE `id`='$user_id'";
           $exec_upd_sql = mysqli_query($conn , $upd_sql);
           if($exec_upd_sql){
               $userData = "SELECT `id`, `First_name`,`social_id`, `role_id`, `email`, `Phone`, `City`, 
               `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`,
               `notification_token`, `created_at`, `img` FROM `users` WHERE `id` = '$user_id'";
               $exec_userData = mysqli_query($conn , $userData);
               $row = mysqli_fetch_array($exec_userData);
               
               $temp = [
                   "address"=>$row['Address'],
                   "city"=>$row['City'],
                   "email"=>$row['email'],
                   "fullname"=>$row['First_name'],
                   "notification_token"=>$row['notification_token'],
                   "password"=>$row['password'],
                   "phone"=>$row['Phone'],
                   "role_id"=>$row['role_id'],
                   "user_id"=>$row['id'],
                   "zipcode"=>$row['Zip_code'],
                      "profile_pic"=>$row['img']
                   ];
               
            $data = ["status"=>true,
                "message"=>"Profile updated successfully.",
                "data"=>$temp
                ];
            echo json_encode($data); 
       }
           }
        

    
           
    
    }else{
           
       $data = ["status"=>false,
                "message"=>"Access Denied!"];
            echo json_encode($data); 
       }

?>