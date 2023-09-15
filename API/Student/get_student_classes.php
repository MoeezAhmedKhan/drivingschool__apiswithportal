<?php
include('../connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $student_id = $_POST["student_id"];

    $sql= "SELECT c.id,c.date,c.start_time,c.end_time,c.status,u.First_name,l.l_title FROM classes c
    INNER JOIN lessons l on l.l_id = c.lesson_id INNER JOIN class_log cl on cl.class_id = c.id 
    INNER JOIN users u on u.id = c.teacher_id WHERE cl.student_id = $student_id";
    $execute = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($execute) > 0){
        $dataArray = array();
            
            while($row = mysqli_fetch_array($execute))
            {
                
                $temp = [
                            "id"=>$row['id'],
                            "l_title"=>$row['l_title'],
                            "teacher_name"=>$row['First_name'],
                            "date"=>$row['date'],
                            "time"=>$row['start_time']." - ".$row['end_time'],
                            "status"=>$row['status'],
                        ];
                    array_push($dataArray , $temp);
            }
            
            
           $data = ["status"=>true,
                    "message"=>"Student Classes fetched successfully.",
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