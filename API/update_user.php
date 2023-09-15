<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    
                $user_id = $_POST['user_id'];
                $fname = $_POST['fullname'];
                $mobile = $_POST['mobile'];
                 $email = $_POST['email'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $zipcode = $_POST['zipcode'];

    $update_data = "UPDATE `users` SET `First_name`='$fname',`email`='$email',`Phone`='$mobile',`City`='$city',`Address`='$address',
                    `Zip_code`='$zipcode' WHERE `id`='$user_id'";
       $execute_update = mysqli_query($conn,$update_data);
       
       if($execute_update){
               $check_if_dataisin_db2 = "SELECT * FROM `users` WHERE `id` = '$user_id'";
                    $execute2 = mysqli_query($conn,$check_if_dataisin_db2);
                     $fetch_user_data = mysqli_fetch_array($execute2);
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
                        
                  
                        
                       
                       
                    ];
                    
           $data = ["status"=>true,
                    "message"=>"User updated successfully.",
                    "data"=>$temp !=null ? $temp : []
                    ];
           echo json_encode($data); 
           
       }
           
    
    }else{
           
       $data = ["status"=>false,
                "message"=>"Access denied!"];
            echo json_encode($data); 
       }

?>