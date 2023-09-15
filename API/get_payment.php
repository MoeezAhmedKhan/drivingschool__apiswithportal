<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    $teacher_id = $_POST['teacher_id'];
    $student_id = $_POST['student_id'];
 
    $sql= "SELECT * FROM amount WHERE student_id = $student_id and teacher_id = $teacher_id ORDER BY id DESC";
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
                       "amount"=>$row['amount'],
                        "created_at"=>$new[0],
                    ];
            array_push($dataArray , $temp);
        }
            
            
        $data = ["status"=>true,
                    "message"=>"payment fetched successfully.",
                "data"=>$dataArray];
        echo json_encode($data); 

      
      
    }
    else
    {
       $data = ["status"=>false,
                "message"=>"no payment found!"];
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