<?php
if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
include("connection.php");
$email = $_POST['email'];

$sql = "UPDATE `users` SET `notification_token`= '',`Status` = 'inactive' WHERE `email` = '$email'";
$exec_sql = mysqli_query($conn,$sql);

if($exec_sql){
      $data = ["status"=>true,
            "Response_code"=>200,
            "Message"=>"Logout successfully!"];
  echo json_encode($data); 
}else{
      $data = ["status"=>false,
            "Response_code"=>202,
            "Message"=>"Something went wrong, Please try later!"];
  echo json_encode($data); 
}


}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "Message"=>"Access denied"];
  echo json_encode($data);          
}