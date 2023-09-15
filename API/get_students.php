<?php
include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
{
    
    $status = $_POST['status'];
    
    if($status == 'active')
    {
        $sql= "SELECT * FROM users WHERE role_id = 2 and Status = 'active'";
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
                            "Full_name"=>$row['First_name'],
                            "role_id"=>$row['role_id'],
                            "email"=>$row['email'],
                            "Phone"=>$row['Phone'],
                            "City"=>$row['City'],
                            "Address"=>$row['Address'],
                            "Zip_code"=>$row['Zip_code'],
                            "password"=>$row['password'],
                            "Status"=>$row['Status'],
                            "img"=>$row['img'] != null ?  $row['img'] : '' ,
                            "created_at"=>$new[0],
                        ];
                array_push($dataArray , $temp);
            }
                
                
            $data = ["status"=>true,
                        "message"=>"active student fetched successfully.",
                        "data"=>$dataArray];
            echo json_encode($data); 
    
        }
        else
        {
           $data = ["status"=>false,
                    "message"=>"no record found!"];
           echo json_encode($data);   
         }
         
    }
    elseif($status == 'inactive')
    {
        
        $sql= "SELECT * FROM users WHERE role_id = 2 and Status = 'inactive'";
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
                            "Full_name"=>$row['First_name'],
                            "role_id"=>$row['role_id'],
                            "email"=>$row['email'],
                            "Phone"=>$row['Phone'],
                            "City"=>$row['City'],
                            "Address"=>$row['Address'],
                            "Zip_code"=>$row['Zip_code'],
                            "password"=>$row['password'],
                            "Status"=>$row['Status'],
                            "img"=>$row['img'],
                            "created_at"=>$new[0],
                        ];
                array_push($dataArray , $temp);
            }
                
                
            $data = ["status"=>true,
                        "message"=>"inactive student fetched successfully.",
                        "data"=>$dataArray];
            echo json_encode($data); 
    
        }
        else
        {
           $data = ["status"=>false,
                    "message"=>"no record found!"];
           echo json_encode($data);   
         }
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