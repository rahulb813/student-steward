<?php
include('includes/config.php');



if(!empty($_POST["roomid"])) 
{
$id=$_POST["roomid"];
 $query ="SELECT * FROM rooms WHERE room_no = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s',$id);
$stmt->execute();
$res=$stmt->get_result();
while($row=$res->fetch_object())
{  echo htmlentities($row->seater);
 
 }
}


if(!empty($_POST["rid"])) 
{
$id=$_POST["rid"];
 $query ="SELECT * FROM rooms WHERE room_no = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('s',$id);
$stmt->execute();
$res=$stmt->get_result();
while($row=$res->fetch_object())
{  echo htmlentities($row->fees);
 
 }
}



?>