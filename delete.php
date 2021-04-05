<?php

if(isset($_GET['id']) && ctype_digit($_GET['id']))
    {
        $id=$_GET['id'];
    } else
{
    header('Location: select.php');
}

$conn = OpenCon();
$sql = 'DELETE from users WHERE id=$id ';
$sql->query($sql);
echo 'User has been deleted';

CloseCon($conn);