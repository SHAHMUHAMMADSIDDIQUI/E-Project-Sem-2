<?php
$con = mysqli_connect('localhost', 'root', '', 'salon');
if (mysqli_connect_errno()) {
    echo "DataBase Connection Failed";
} else {
    echo "DataBase Connection Sucessfully";
}
?>