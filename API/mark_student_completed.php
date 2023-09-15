<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $student_id = $_POST['student_id'];
    $teacher_id = $_POST['teacher_id'];
    
    $fetch = "SELECT * FROM `completed_student` where student_id = $student_id and teacher_id = $teacher_id";
    $exec = mysqli_query($conn,$fetch);
    $row = mysqli_num_rows($exec);
    if($row <= 0)
    {
        $sql= "INSERT INTO `completed_student`(`student_id`, `teacher_id`) VALUES ('$student_id','$teacher_id')";
        $execute = mysqli_query($conn,$sql);
        
        if($execute)
        {
                    
            $temp = [
                        "student_id"=>$student_id,
                        "teacher_id"=>$teacher_id,
                    ];
                
            $data = ["status"=>true,
                        "message"=>"mark student completed successfully",
                    "data"=>$temp];
            echo json_encode($data);
        }
        else
        {
           $data = ["status"=>false,
                    "message"=>"Something went wrong!"];
           echo json_encode($data);   
         }
         
    }
    else
    {
          $data = ["status"=>false,
                "Response_code"=>402,
                "Message"=>"not allowed"];
      echo json_encode($data); 
    }
  
  
  
 
}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
 }

?>