
<?php

$conn = mysqli_connect("localhost", "root", "", "teacher"); 


if ($conn) {

    // echo"connection sothik vabe hoise <br>";
 
} else {
    echo "Error";
}

$mysql_code = "select * from info";


$connect = mysqli_query($conn, $mysql_code);


$row_number = mysqli_num_rows($connect); 

if ($row_number == 0) {
    
    echo"table e kono data nai";
}
else{


    echo "<h4>Name   Roll<h4> <br>";
    while ($data = mysqli_fetch_assoc($connect)) {
        echo $data['name'];
        echo " ";
        echo $data['roll'];
        echo"<br>";
    }
}

?>

