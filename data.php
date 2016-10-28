<?php
//Get login credentials
require_once 'login.php';

//Get values from form
$num1 = $_POST['num1'];
$operation = $_POST['operation'];
$num2 = $_POST['num2'];
$result = 0;

if ($operation == "+")
{
    $result = $num1 + $num2;
}
elseif ($operation == "-")
{
    $result = $num1 - $num2;
}
elseif ($operation == "x" || $operation == "*")
{
    $result = $num1 * $num2;
}
elseif ($operation == "/")
{
    $result = $num1 / $num2;
}

//Insert data into mysql
$sql="INSERT INTO calculator (num1, operation, num2, result) 
VALUES ('$num1', '$operation', '$num2', $result)";

$query_result = mysql_query($sql);

if($query_result)
{
  header('Location: ./calculation.php');
}
else
{
  echo "ERROR QUERYING DB";
}

// close mysql
mysql_close();
?>
