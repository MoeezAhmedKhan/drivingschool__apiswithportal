<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
    

    $class_id = $_POST['class_id'];
    $lesson_id= $_POST['lesson_id'];
    $date= $_POST['date'];
    $start_time= $_POST['start_time'];
    $end_time= $_POST['end_time'];
    $student_id= $_POST['student_id'];
    
    $sql = "UPDATE `classes` SET `lesson_id`='$lesson_id',`date`='$date',`start_time`='$start_time',`end_time`='$end_time' WHERE `id`= '$class_id'";
    $exec = mysqli_query($conn, $sql);
    
    if($exec){
        $sql2 = "UPDATE `class_log` SET `student_id`='$student_id' WHERE `class_id`='$class_id'";
        $exec2 = mysqli_query($conn, $sql2);
        
          $data = ["status"=>true,
            "Response_code"=>200,
            "message"=>"Schedule updated sucessfully"];
  echo json_encode($data); 
        
    }
  
}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "message"=>"Access denied"];
  echo json_encode($data);          
}

?>