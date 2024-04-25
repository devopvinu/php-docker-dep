<?php

    $conn = mysqli_connect('db', 'jake', 'jake', "myDb");
    if ($conn){
	    echo"<h1 style="color:green;"> Database Connected Sucessfully </h1>";
    }else{
	    echo"<h1 style="color:red;"> Unable To Connect To Database </h1>";
    }

// Close connection
$conn->close();

?>
