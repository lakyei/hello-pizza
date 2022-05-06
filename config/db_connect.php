<?php

// connect to the database
$conn = mysqli_connect('localhost', 'luigi', 'snalak', 'hello_pizza');

// check connection
if(!$conn) {
	echo "Connection error: ". mysqli_connect_error();
}

?>