<html>
<body>

<?php
require_once 'login.php';

$query = mysql_query("SELECT * FROM calculator WHERE id=(SELECT MAX(id) FROM calculator)");
if (!$query)
{
    echo "Query fail.";
}

echo "Results:\n ";

while ($row = mysql_fetch_assoc($query))
{
    echo $row['num1'], ' ', $row['operation'], ' ', $row['num2'], ' ',  '=', ' ';
    echo  $row['result'] ;
}

?>

</body>
</html>

