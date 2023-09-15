<?php


if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){

 include('connection.php');


// $email = $_POST['email'];   
  $to = $_POST['to'];  
   $from = 'zeshanfaisal10@gmail.com';  
   // request variables // important
   $email_from = $from; 
   $email_subject =  "New OTP Message"; // The Subject of the email 
 
   $headers = "From: ".$email_from;
        
        
				
        //  $ok = mail($to, $email_subject, $email_txt, $headers);
         
        //  if($ok) {
        //     echo "File Sent Successfully.";
        //   // delete a file after attachment sent.
        //  }else {
        //     die("Sorry but the email could not be sent. Please go back and try again!");
        //  }
   
     
  

    

  if (empty($to)){
     $data = [
        "status"=>false,
        "message"=>"email is required",
             ];
         echo json_encode($data); 
  }else{
      
    $sql="SELECT `id` FROM `users` WHERE `email` = '$to'";
    $execute = mysqli_query($conn,$sql);
        if(mysqli_num_rows($execute) > 0){
              $temp = [
            "status"=>false,
            "message"=>"email already exists",
        ];
      echo json_encode($temp);
  }else{

            $digits = 4;
      $OTP = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $email_txt = "Your OTP code for Driving School is ".$OTP."";
        mail($to, $email_subject, $email_txt, $headers);
        
        $data = [
            "OTP"=>$OTP,
            ];
        $temp = [
            "status"=>true,
            "data"=>$data,
            "message"=>"your OTP has been sent to your email address",
        ];
      echo json_encode($temp);  
  }
  }
  
}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
}
