<?php

    include('connection.php');
    
    if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC')
    {
     
        $receiver_id = $_POST['user_id'];
        
        $query = "SELECT i.inbox_id,i.sender_id,u.First_name,i.reciever_id,i.last_message,i.status,i.date 
        FROM inbox i INNER JOIN users u on u.id = i.sender_id WHERE i.reciever_id = $receiver_id";
        $run = mysqli_query($conn,$query);
        $num = mysqli_num_rows($run);
        if($num > 0)
        {
            $myarray = array();
            while($ar = mysqli_fetch_array($run))
            {
                $temp = 
                [
                    "inbox_id"=>$ar['inbox_id'],
                    "sender_id"=>$ar['sender_id'],
                    "sender_name"=>$ar['First_name'],
                    "reciever_id"=>$ar['reciever_id'],
                    "last_message"=>$ar['last_message'],
                    "status"=>$ar['status'],
                    "createdat"=>time_elapsed_string($ar['date'])
                ];
                array_push($myarray, $temp);
                
            }
            
            $data = [
                        "status"=>true,
                        "message"=>"inbox fetch successfully!",
                        "data"=>$myarray
                    ];
            echo json_encode($data); 

        }
        else
        {
             $data = [
                        "status"=>true,
                        "message"=>"message not found!",
                    ];
            echo json_encode($data); 
        }
        
    }
    
    else
    {
        $data = ["status"=>false,
        "message"=>"Access denied"];
        echo json_encode($data); 
    }
    
    
    
    
     function time_elapsed_string($datetime, $full = false) {
//      $IST = new DateTime($datetime, new DateTimeZone('UTC'));

//     // change the timezone of the object without changing it's time
//     $IST->setTimezone(new DateTimeZone('Asia/Kolkata'));

//     // format the datetime
//   $zzzDate =  $IST->format('Y-m-d H:i:s T');
   
   
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

    
    

?>