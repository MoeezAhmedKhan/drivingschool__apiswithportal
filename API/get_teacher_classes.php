<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $teacher_id = $_POST["teacher_id"];

    $sql= "SELECT c.id,l.l_title,u.First_name,c.date,c.start_time,c.end_time,c.status FROM classes c 
    INNER JOIN class_log cl on cl.class_id = c.id INNER JOIN lessons l on l.l_id = c.lesson_id 
    INNER JOIN users u on u.id = cl.student_id WHERE c.teacher_id = $teacher_id";
    $execute = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($execute) > 0){
        $dataArray = array();
            
            while($row = mysqli_fetch_array($execute))
            {
                $c_date = date_create($row['date']);
                $act_date = date_format($c_date,"d/m/Y");
                
                $temp = [
                            "id"=>$row['id'],
                            "l_title"=>$row['l_title'],
                            "First_name"=>$row['First_name'],
                            "date"=>$act_date,
                            "time"=>$row['start_time']." - ".$row['end_time'],
                            "status"=>$row['status'],
                        ];
                    array_push($dataArray , $temp);
            }
            
            
           $data = ["status"=>true,
                    "message"=>"lesson fetched successfully.",
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