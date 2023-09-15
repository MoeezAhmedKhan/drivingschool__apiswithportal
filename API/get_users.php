<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){

 

 
    $sql= "SELECT `id`, `First_name`, `Last_name`, `social_id`, `role_id`, `email`, `Phone`, `City`, `Address`, `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`, `notification_token`, `created_at` FROM `users` WHERE `role_id` = 2 AND `Status` = 'active'";
    $execute = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($execute) > 0){
        $dataArray = array();
            
            while($row = mysqli_fetch_array($execute)){
                
                            $temp = [
                       "student_id"=>$row['id'],
                        "student_name"=>$row['First_name'],
                    ];
                array_push($dataArray , $temp);
            }
            
            
           $data = ["status"=>true,
                    "message"=>"students fetched successfully.",
                    "data"=>$dataArray];
           echo json_encode($data); 

      
      
    }else{
       $data = ["status"=>false,
                "message"=>"Something went wrong!"];
       echo json_encode($data);   
     }
  
  
  
 
}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
 }

?>