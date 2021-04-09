<?php

if(isset($_GET['id']) && ctype_digit($_GET['id']))
    {
        $id=$_GET['id'];
    } else
{
    header('Location: select.php');
}

include 'db_connection.php';

$conn = OpenCon();
$sql = "DELETE FROM users WHERE id=$id ";
$conn->query($sql);

if (mysqli_query($conn, $sql)) {
echo 'User has been deleted';

} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


CloseCon($conn);
?>