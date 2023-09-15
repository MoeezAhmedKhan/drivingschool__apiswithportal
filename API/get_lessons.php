<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){

 

 
    $sql= "SELECT `l_id`, `l_title`, `color` FROM `lessons`";
    $execute = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($execute) > 0){
        $dataArray = array();
            
            while($row = mysqli_fetch_array($execute)){
                
                            $temp = [
                       "lesson_id"=>$row['l_id'],
                        "lesson_title"=>$row['l_title'],
                    ];
                array_push($dataArray , $temp);
            }
            
            
           $data = ["status"=>true,
                    "message"=>"lessons fetched successfully.",
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