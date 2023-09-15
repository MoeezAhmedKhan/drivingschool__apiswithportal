<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
  $inbox_id = $_POST['inbox_id'];   
  
  
  $sql = "SELECT `inbox_id`, `sender_id`, `reciever_id`, `last_message`, `status`, `date` FROM `inbox` WHERE inbox_id = $inbox_id";
  $exec = mysqli_query($conn,$sql);
  if(mysqli_num_rows($exec) > 0)
  {
        $data = mysqli_fetch_array($exec);
        $inbox_id = $data['inbox_id'];
        $sql_update = "UPDATE `inbox` SET `status`= 'read' WHERE `inbox_id`= $inbox_id";
        $execute_update = mysqli_query($conn,$sql_update);
        if($execute_update)
        {
           
            $data = ["status"=>true,
            "message"=>"inbox status has been updated"];
            echo json_encode($data);  
        }
        else
        {
            $data = ["status"=>false,
            "Response_code"=>202,
            "Message"=>"Something went wrong!"];
            echo json_encode($data);  
        }
      
      
  }
  else
  {
       $data = ["status"=>false,
            "Response_code"=>203,
            "Message"=>"Inbox not found"];
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