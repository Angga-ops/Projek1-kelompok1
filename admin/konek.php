<?php
$con = mysqli_connect('localhost', 'root', '', 'siwang');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
?>