<?php
     include 'connect.php';

     $id = $_GET['id'];

     $query = "DELETE FORM event_table WHERE id='$id'";

     $deleteQuery = mysqli_query($connect, $query);

     header('location:Home.php');
?>