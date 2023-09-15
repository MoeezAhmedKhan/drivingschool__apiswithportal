<?php
    include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){

    $class_id = $_POST['class_id'];
    
    $sql = "DELETE FROM `classes` WHERE `id` = '$class_id'";
    $exec = mysqli_query($conn, $sql);
    
    if($exec){
        
        $sql2 = "DELETE FROM `class_log` WHERE `class_id` = '$class_id'";
           $exec2 = mysqli_query($conn, $sql2);
    
              $data = ["status"=>true,
                "Response_code"=>200,
                "message"=>"Schedule deleted sucessfully."];
      echo json_encode($data);  
        
    }else{
        
              $data = ["status"=>false,
                "Response_code"=>203,
                "message"=>"Something went wrong."];
      echo json_encode($data);  
    }
    
    

}
else
{
    
      $data = ["status"=>false,
                "Response_code"=>403,
                "message"=>"Access denied"];
      echo json_encode($data);      
      
}
