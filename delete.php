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
$sql = 'DELETE from users WHERE id=$id ';
$conn->query($sql);
echo 'User has been deleted';

CloseCon($conn);