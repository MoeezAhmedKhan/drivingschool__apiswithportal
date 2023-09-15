<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $teacher_id = $_POST['teacher_id'];
 
    $sql= "SELECT c.id,u.First_name,u.Last_name,u.img,c.created_at FROM completed_student c INNER JOIN users u on u.id = c.student_id WHERE c.teacher_id = $teacher_id";
    $execute = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($execute) > 0)
    {
        $dataArray = array();
            
        while($row = mysqli_fetch_array($execute))
        {
            
            $date = $row['created_at'];
            $new = explode(" ",$date);
                
            $temp = [
                        "id"=>$row['id'],
                       "full_name"=>$row['First_name']." ".$row['Last_name'],
                       "img"=>$row['img'],
                        "created_at"=>$new[0],
                    ];
            array_push($dataArray , $temp);
        }
            
            
        $data = ["status"=>true,
                    "message"=>"mark student fetched successfully.",
                "data"=>$dataArray];
        echo json_encode($data); 

      
      
    }
    else
    {
       $data = ["status"=>false,
                "message"=>"no student found!"];
       echo json_encode($data);   
     }
  
  
  
 
}
else
{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
 }

?>