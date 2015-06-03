<?php

//$mysqli = new mysqli("snshq.net","codeuser","c0d3p14y_1515","codeplay");


$mysqli = new mysqli("server","username","password","db");
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
