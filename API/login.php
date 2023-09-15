<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    
    $email = $_POST['email'];  
    $password = $_POST['password'];  
    $notification_token= $_POST['notification_token'];
 
 
 if(empty($email))
 {
    $data = ["status"=>false,
             "message"=>"email is required",
            ];
    echo json_encode($data); 
 }
 else if
 (empty($password))
 {
    $data = ["status"=>false,
             "message"=>"password is required",
            ];
    echo json_encode($data);
 }
 else{
 
    $check_if_dataisin_db = "SELECT * FROM `users` WHERE `email`= '$email' AND `password`='$password'";
    $execute = mysqli_query($conn,$check_if_dataisin_db);
    
    if(mysqli_num_rows($execute) > 0){
        // for status
    $check_if_dataisin_db2 = "SELECT * FROM `users` WHERE `email`= '$email' AND `password`='$password'";
    $execute2 = mysqli_query($conn,$check_if_dataisin_db2);
         if(mysqli_num_rows($execute2) > 0){
       $fetch_user_data = mysqli_fetch_array($execute);
       $user_id = $fetch_user_data['id'];
       $update_data = "UPDATE `users` SET `notification_token` = '$notification_token', `Status` = 'active' WHERE `id` = '$user_id'";
       $execute_update = mysqli_query($conn,$update_data);
       
       if($execute_update){
            
            
            //`id`, `First_name`, `Last_name`, `social_id`, `role_id`, `email`, `Phone`, `City`, `Address`,
            //`Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`,
            //`password`, `Status`, `notification_token`, `created_at`
            
            $temp = [

                       "user_id"=>$fetch_user_data['id'],
                        "fullname"=>$fetch_user_data['First_name'],
                        "role_id"=>$fetch_user_data['role_id'],
                        "email"=>$fetch_user_data['email'],
                        "phone"=>$fetch_user_data['Phone'],
                        "city"=> $fetch_user_data['City'],
                       "address"=> $fetch_user_data['Address'],
                       "zipcode"=> $fetch_user_data['Zip_code'],
                       "password"=>$fetch_user_data['password'],
                        "notification_token"=>$fetch_user_data['notification_token'],
                        "profile_pic"=>$fetch_user_data['img']
                        
                  
                        
                       
                       
                    ];
           $data = ["status"=>true,
                    "message"=>"logged in successfully.",
                    "data"=>$temp];
           echo json_encode($data); 
           
       }else{
           
            $data = ["status"=>false,
            "message"=>"Error"];
            echo json_encode($data);   
       }
      
    }
    else{
              $data = ["status"=>false,
                "message"=>"Your account is suspended, please contact app administrator"];
       echo json_encode($data);   
        }
      
    }else{
       $data = ["status"=>false,
                "message"=>"email or password is invalid"];
       echo json_encode($data);   
     }
  
  
  
  
  }

}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
 }

?>