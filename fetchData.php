<?php
$conn = mysqli_connect("localhost","root" , "");
mysqli_select_db($conn, "dbpoetry");

$qry = "SELECT * FROM dbtable";
$res = mysqli_query($conn ,$qry);

$row = $res->fetch_all(MYSQLI_ASSOC);

if(empty($row)){
   $response = array("status"=>"0" ,"message"=>"record is empty", "data" =>$row);
}
else{
  $response = array("status"=>"1" ,"message"=>"record is availbale", "data" =>$row);
}
echo json_encode($response);

?>