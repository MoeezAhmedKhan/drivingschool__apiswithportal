<?php
 include('connection.php');

if($_POST['token'] == 'as23rlkjadsnlkcj23qkjnfsDKJcnzdfb3353ads54vd3favaeveavgbqaerbVEWDSC'){
//     {
//     courseId: 'Driving Lesson',
//     day: 3,
//     startTime: '12:00',
//     endTime: '14:00',
//     location: '',
//     color: Colors.green,
//   },

    $user_id = $_POST['user_id'];
   $target_date=Date('Y-m-d', strtotime('+3 days'));
   $sql = "SELECT c.id, c.teacher_id, c.lesson_id, c.date, c.start_time,c.end_time, l.l_title , l.color FROM `classes` c 
   INNER JOIN `lessons` l ON l.l_id = c.lesson_id WHERE c.teacher_id = '$user_id' AND c.date < '$target_date'";
   
   $exec_sql = mysqli_query($conn , $sql);
   
   if(mysqli_num_rows($exec_sql) > 0){
       $data_array = array();
       
       while($row = mysqli_fetch_array($exec_sql)){
           
           $today = date('Y-m-d');
           $coming_date = $row['date'];
        
            $x = date_create($today);
           $y = date_create($coming_date);
           $diff=date_diff($x,$y);

         $dayofweek = date('w', strtotime($coming_date)); 
           $temp = [
               "class_id"=>$row['id'],
               "courseId"=>$row['l_title'],
               "day"=>$dayofweek,
               "startTime"=>$row['start_time'],
               "endTime"=>$row['end_time'],
               "location"=>'',
               "color"=>$row['color']
               ];
             array_push($data_array , $temp);   
       }
       
        $data = ["status"=>true,
            "Response_code"=>200,
            "message"=>"Timetable fetched successfully!",
            "data" =>$data_array
            ];
  echo json_encode($data);  
       
       
   }else{
      $data = ["status"=>true,
            "Response_code"=>202,
            "message"=>"No lessons added yet!"];
  echo json_encode($data);    
   }
    
       
    
  
}else{
  $data = ["status"=>false,
            "Response_code"=>403,
            "message"=>"Access denied"];
  echo json_encode($data);          
}

?>