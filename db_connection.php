<?php


function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "delayne";
    $dbpass = "E(Js2G/8uZK@9rJ_";
    $db = "php";


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);


    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

