<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $student_id = $_POST['student_id'];
    $teacher_id = $_POST['teacher_id'];
    $amount = $_POST['amount'];
    
    $sql= "INSERT INTO `amount`(`student_id`, `teacher_id`, `amount`) VALUES ('$student_id','$teacher_id','$amount')";
    $execute = mysqli_query($conn,$sql);
        
    if($execute)
    {
                    
            $temp = [
                        "student_id"=>$student_id,
                        "teacher_id"=>$teacher_id,
                        "amount" => $amount,
                    ];
                
            $data = ["status"=>true,
                        "message"=>"payment added successfully",
                    "data"=>$temp];
            echo json_encode($data);
        }
    else
    {
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