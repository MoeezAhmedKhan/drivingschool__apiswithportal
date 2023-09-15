<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
  $social_id = $_POST['social_id'];   
  $fname = "User_".date('Ymdis');   
  $email = "".date('Ymdis')."@socialuser.com";
  $password = "".rand(10000000,30000000);
  $notification_token =$_POST['notification_token'];
  
  $chk_sql = "SELECT * FROM `users` WHERE `social_id`= '$social_id'";
  
  $exec_chk_sql = mysqli_query($conn,$chk_sql);
  
if(mysqli_num_rows($exec_chk_sql) > 0 ){
   $user_data = mysqli_fetch_array($exec_chk_sql);
       $user_id = $user_data['id'];
       $sql_update = "UPDATE `users` SET `notification_token` = '$notification_token' WHERE `id` = $user_id";
       $execute_update = mysqli_query($conn,$sql_update);
       if($execute_update){
            $temp = [
                   "user_id"=>$user_data['id'],
                   "full_name"=>$user_data['First_name'],
                   "email"=>$user_data['email'],
                   "social_id"=>$user_data['social_id'],
                   "notification_token"=>$user_data['notification_token'],
                   "password"=>$user_data['password'],
                   "role_id"=>$user_data['role_id'],
                    ];
           $data = ["status"=>true,
                    "message"=>"logged in successfully.",
                    "data"=>$temp];
           echo json_encode($data);  
       }
}   else{
    

         $insert_sql = "INSERT INTO `users`(`First_name`, `social_id`, `role_id`, `email`,`password`, `Status`,`notification_token`)
                        VALUES ('$fname','$social_id','2','$email','$password','active','$notification_token')";
         $execute_insert = mysqli_query($conn,$insert_sql);
        if($execute_insert){
                 $last_id = $conn->insert_id;
                $tempz = [
                  "user_id"=>$last_id,
                   "full_name"=>$fname,
                    "email"=>$email,
                    "social_id"=>$social_id,
                    "notification_token"=>$notification_token,
                    "password"=>$password,
                    "role_id"=>'2',
                    ];
                    
            $dataz = ["status"=>true,
                    "message"=>"logged in successfully.",
                    "data"=>$tempz];
           echo json_encode($dataz);         
         }
  
}
  


}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
}

?>