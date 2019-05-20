<?php

if (isset($_SESSION['userId'])) {
           
       
           // get ID
           $id = mysqli_real_escape_string($conn, $_SESSION['userId']);
       
           // Create Query
           $query = 'SELECT * FROM author WHERE admin_id = '.$id;
       
           // Get Result
           $result = mysqli_query($conn, $query);
       
           // Fetch Data
           $post = mysqli_fetch_assoc($result);
           //var_dump($posts);
       
           }
           else {
           echo "you are logout";
           };
?>