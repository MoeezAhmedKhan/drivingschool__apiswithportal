<?php
    include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){

    $student_id = $_POST['student_id'];
    
    $select = "SELECT `id`, `First_name`, `Last_name`, `social_id`, `role_id`, `email`, `Phone`, `City`, `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`, `notification_token`, `created_at`, `img` FROM `users` WHERE id = $student_id and role_id = 2";
    $run = mysqli_query($conn,$select);
    $row = mysqli_num_rows($run);
    if($row > 0)
    {
        
        while($ar = mysqli_fetch_array($run))
        {
            $First_name = $ar["First_name"];
            $Last_name = $ar["Last_name"];
            $social_id = $ar["social_id"];
            $role_id = $ar["role_id"];
            $email = $ar["email"];
            $Phone = $ar["Phone"];
            $City = $ar["City"];
            $Address = $ar["Address"];
            $Zip_code = $ar["Zip_code"];
            $Driving_license_front_image = $ar["Driving_license_front_image"];
            $Driving_license_rear_image = $ar["Driving_license_rear_image"];
            $password = $ar["password"];
            $Status = $ar["Status"];
            $notification_token = $ar["notification_token"];
            $img = $ar["img"];
            $created_at = $ar["created_at"];
            
            
            $insert = "INSERT INTO `delete_student`(`first_name`, `last_name`, `social_id`, `role_id`,
            `email`, `phone`, `city`, `address`, `zip_code`, `driving_license_front_image`, 
            `driving_license_rear_image`, `password`, `status`, `notification_token`, `image`, `created_at`) 
            VALUES ('$First_name','$Last_name','$social_id','$role_id','$email','$Phone','$City','$Address','$Zip_code',
            '$Driving_license_front_image','$Driving_license_rear_image','$password','$Status','$notification_token','$img','$created_at')";
            $insert_run = mysqli_query($conn,$insert);
            if($insert_run)
            {
                $delete = "DELETE FROM `users` WHERE id = $student_id";
                $delet_exec = mysqli_query($conn, $delete);
                if($delet_exec)
                {
                
                    $data = ["status"=>true,
                            "Response_code"=>200,
                            "message"=>"student deleted sucessfully."];
                  echo json_encode($data);  
                    
                }
                else
                {
                    
                          $data = ["status"=>false,
                            "Response_code"=>402,
                            "message"=>"Something went wrong."];
                  echo json_encode($data);  
                }
            }
            else
            {
                    
                 $data = ["status"=>false,
                            "Response_code"=>402,
                            "message"=>"Something went wrong before entering data!"];
                  echo json_encode($data);  
            }
        }
    }
    else
    {
         $data = ["status"=>false,
                "Response_code"=>402,
                "message"=>"student not found!"];
      echo json_encode($data);  
    }
    

}
else
{
    
      $data = ["status"=>false,
                "Response_code"=>403,
                "message"=>"Access denied"];
      echo json_encode($data);      
      
}
