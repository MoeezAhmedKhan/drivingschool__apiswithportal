<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    

    $full_name= $_POST['fullname'];
    $phone= $_POST['mobile'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $city= $_POST['city'];
    $postcode= $_POST['postcode'];
    $licencenum = $_POST['licenseNum'];
    $password = $_POST['password']; 
    $notification_token= $_POST['notification_token'];
    $social_id = $_POST['social_id'];
   

  if (empty($full_name))
  {
      
     $data = ["status"=>false,
                "message"=>"First name is required",
             ];
         echo json_encode($data); 
         
  }else if(empty($email)) 
  {
      
    $data = ["status"=>false,
                "message"=>"Email is required",
             ];
         echo json_encode($data);
         
  }
   else if(empty($phone)) 
  {
      
    $data = ["status"=>false,
                "message"=>"Phone is required",
             ];
         echo json_encode($data);
         
  }


  else if(empty($password)) 
  {
      
    $data = ["status"=>false,
                "message"=>"Password is required",
             ];
         echo json_encode($data); 
         
  }
  else{
      

        $check_if_dataisin_db="SELECT `id` FROM `users` WHERE `email` = '$email'";
        $execute = mysqli_query($conn,$check_if_dataisin_db);
  
        if(mysqli_num_rows($execute) == 0){
            
            
         if(empty($social_id)) {  
        $insert_user = "INSERT INTO `users`(`First_name`,`role_id`, `email`, `Phone`, `City`,
        `Address`, `Zip_code`, `password`,`notification_token`) VALUES ('$full_name','2','$email','$phone','$city',
        '$address','$postcode','$password','$notification_token')";
        $result = mysqli_query($conn,$insert_user);
        
        if($result){
            
          $last_id = $conn->insert_id;
          $temp = [
                       "user_id"=> $last_id,
                       "fullname"=>$full_name,
                       "role_id"=>2,
                    
                       "phone"=>$phone,
                        "email"=> $email,
                        "password"=> $password,
                        "address"=> $address,
                        "city"=> $city,
                        "postcode"=> $postcode,
                        "notification_token"=> $notification_token,
                    ];
                    
          $data = ["status"=>true,
                "message"=>"user has been registered sucessfully.",
                "data"=>$temp];
          echo json_encode($data);   
      }else{
          
         $data = ["status"=>false,
                "message"=>"there was some error"];
         echo json_encode($data);   
      }
         }else{
             
        $insert_user = "INSERT INTO `users`(`First_name`,`social_id`,`role_id`, `email`, `Phone`, `City`,
        `Address`, `Zip_code`, `password`,`notification_token`) VALUES ('$full_name','$social_id','2','$email','$phone','$city',
        '$address','$postcode','$password','$notification_token')";
        $result = mysqli_query($conn,$insert_user);
        
        if($result){
            
          $last_id = $conn->insert_id;
          $temp = [
                       "user_id"=> $last_id,
                       "fullname"=>$full_name,
                       "role_id"=>2,
                       "phone"=>$phone,
                        "email"=> $email,
                        "password"=> $password,
                        "address"=> $address,
                        "city"=> $city,
                        "postcode"=> $postcode,
                        "notification_token"=> $notification_token,
                    ];
                    
          $data = ["status"=>true,
                "message"=>"user has been registered sucessfully.",
                "data"=>$temp];
          echo json_encode($data);   
      }else{
          
         $data = ["status"=>false,
                "message"=>"there was some error"];
         echo json_encode($data);   
      }
             
         }
    }else{
      
      $data = ["status"=>false,
                "message"=>"email already exists"];
      echo json_encode($data);
      
     }
      
    }
  
}
else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
}

  
  
  

  

 


?>