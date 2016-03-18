<?php

header('Content-Type: application/json');

$con = mysqli_connect("127.0.0.1","user","password","canvasjssampledb");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT * FROM sales");
    
    while($row = mysqli_fetch_array($result))
    {        
        $point = array("label" => $row['product'] , "y" => $row['total_sales']);
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>