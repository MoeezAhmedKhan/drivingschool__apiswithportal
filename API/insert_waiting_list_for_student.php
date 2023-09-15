<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $teacher_id = $_POST['teacher_id'];
    $student_id = $_POST['student_id'];
    
    $fetch = "SELECT * FROM `waiting_list` where student_id = $student_id and teacher_id = $teacher_id";
    $exec = mysqli_query($conn,$fetch);
    $row = mysqli_num_rows($exec);
    if($row <= 0)
    {
  
        $sql= "INSERT INTO `waiting_list`(`teacher_id`, `student_id`) VALUES ('$teacher_id','$student_id')";
        $execute = mysqli_query($conn,$sql);
        
        if($execute)
        {
                    
            $temp = [
                        "student_id"=>$student_id,
                        "teacher_id"=>$teacher_id,
                    ];
                
            $data = ["status"=>true,
                        "message"=>"waiting list add successfully",
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