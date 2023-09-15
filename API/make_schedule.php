<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    

    $user_id = $_POST['user_id'];
    $lesson_id= $_POST['lesson_id'];
    $date= $_POST['date'];
    $start_time= $_POST['start_time'];
    $end_time= $_POST['end_time'];
    $student_id= $_POST['student_id'];
    
    
    $check_sql = "SELECT `id`,`teacher_id`, `lesson_id`, `date`, `start_time`, `end_time` FROM `classes` WHERE `teacher_id` = '$user_id' AND 
    `lesson_id` = '$lesson_id' AND `date` = '$date' AND `start_time` = '$start_time' AND `end_time` = '$end_time'";
    
    $exec_check = mysqli_query($conn , $check_sql);
    
    if(mysqli_num_rows($exec_check) > 0){
        $row = mysqli_fetch_array($exec_check);
        $class_id = $row['id'];
        
        $sql_logz = "INSERT INTO `class_log`(`class_id`, `student_id`) VALUES ('$class_id','$student_id')";
        $exec_sqlzz = mysqli_query($conn , $sql_logz);
        
       
        
       
          $data = ["status"=>true,
            "Response_code"=>200,
            "message"=>"Student added to class successfully!"];
            echo json_encode($data);
        
    }else{
        
                   
     $sql = "INSERT INTO `classes`(`teacher_id`, `lesson_id`, `date`, `start_time`, `end_time`) VALUES
                ('$user_id','$lesson_id','$date','$start_time','$end_time')";
    $exec_sql = mysqli_query($conn , $sql);

    $last_id = $conn->insert_id;  
    if($exec_sql){
      
      $sql_log = "INSERT INTO `class_log`(`class_id`, `student_id`) VALUES ('$last_id','$student_id')";
         $exec_sqlz = mysqli_query($conn , $sql_log);
        
        
     $check_inbox = "SELECT `inbox_id`, `sender_id`, `reciever_id`, `last_message`, `status`, `date` FROM `inbox`
     WHERE (`sender_id` = '$user_id' AND `reciever_id` = '$student_id') OR (`sender_id` = '$student_id' AND `reciever_id` = '$user_id')";
    $exec_chk_ibox = mysqli_query($conn , $check_inbox);
    
    if(mysqli_num_rows($exec_chk_ibox) == 0){
        $currentTime = date("Y-m-d H:i:s");
        $user_massage = 'You are now connected.';
		   	    $sqlInsertInbox = "INSERT INTO `inbox`(`sender_id`, `reciever_id`, `last_message`, `status`,
		   	    `date`) VALUES ('$user_id','$student_id','$user_massage','unread','$currentTime')";
		   	    mysqli_query($conn,$sqlInsertInbox);
		   	    
		   	    $sqlInsertInbox2 = "INSERT INTO `inbox`(`sender_id`, `reciever_id`, `last_message`, `status`,
		   	    `date`) VALUES ('$student_id','$user_id','$user_massage','read','$currentTime')";
		   	    mysqli_query($conn,$sqlInsertInbox2);
    }
        
        
        
       
          $data = ["status"=>true,
            "Response_code"=>200,
            "message"=>"Schedule added successfully!"];
            echo json_encode($data);
            
    }
        
    }
    

    

       
    
  
}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "message"=>"Access denied"];
  echo json_encode($data);          
}

?>