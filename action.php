<?php
$name = $_POST['project-name'];
$con = mysqli_connect("localhost", "root", "", "test-site");
if(!$con) {  
    die('Could not connect: '.mysql_error()); 
    } 
  
    $sql="INSERT INTO test-site.elo_form (project_name) VALUES ('$name')"; 
    mysqli_query($con,$sql);
 
?>