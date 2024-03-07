<?php


$mysql= mysqli_connect('localhost','root','','teacher');

if(isset($_POST['submit']))
{
   $x = $_POST['n1'];
   $y = $_POST['n2'];

   $mysql_code="INSERT INTO info VALUES('$x','$y')";

  $result= mysqli_query($mysql,$mysql_code);

  if($result){
      echo"info successfullly stored";
  }
  else{
      echo"stored hoynai";
  }

}


?>

