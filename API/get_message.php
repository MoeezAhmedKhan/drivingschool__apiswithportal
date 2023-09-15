<?php


    if(isset($_POST["token"]) == "as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC")
    {
        $u_id = $_POST["user_id"];
        require_once("connection.php");
        
        $sql_meesage = "SELECT `m_id`, `sender_id`, `reciever_id`, `Data`, `last_message`, `is_read`, `status`, `created_at`,
        `updated_at` FROM `messages` WHERE sender_id = $u_id";
        $message_run = mysqli_query($conn,$sql_meesage);
        $message_rows = mysqli_num_rows($message_run);
        if($message_rows > 0)
        {
            $myarray = array();
            
            while($ar = mysqli_fetch_array($message_run))
            {
                $sender_id = $ar['sender_id'];
                
                $sql_user = "SELECT `id`, `First_name`, `Last_name`, `social_id`, `role_id`, `email`, `Phone`, `City`, `Address`,
                `Zip_code`, `Driving_license_front_image`, `Driving_license_rear_image`, `password`, `Status`, `notification_token`,
                `created_at` FROM `users` WHERE id = $sender_id";
                $user_run = mysqli_query($conn,$sql_user);
                $user = mysqli_fetch_array($user_run);
                
                $temp = 
                [
                    "id"=>$user['id'],
                    "First_name"=>$user['First_name'],
                    "email"=>$user['email'],
                    "m_id"=>$ar['m_id'],
                    "Data"=>$ar['Data'],
                    "last_message"=>$ar['last_message'],
                    "is_read"=>$ar['is_read'],
                    "created_at"=>time_elapsed_string($ar['created_at']),
                ];
                array_push($myarray,$temp);
                
            }
            
            $data = 
            [
                "status"=>true,
                "response_code"=>200,
                "message"=>"details has been fetched",
                "data"=>$myarray
            ];
            echo json_encode($data);
        }
        else
        {
            $data = 
            [
                "status"=>true,
                "response_code"=>200,
                "message"=>"no message found",
            ];
            echo json_encode($data);
        }
    }
    else
    {
        $data = 
            [
                "status"=>true,
                "response_code"=>403,
                "message"=>"access denied",
            ];
            echo json_encode($data);
    }
    
    
    
    
    
    function time_elapsed_string($datetime, $full = false) 
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array
    (
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) 
    {
        if ($diff->$k) 
        {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } 
        else 
        {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}



?>