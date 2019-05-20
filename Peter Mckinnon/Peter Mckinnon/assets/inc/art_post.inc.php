<?php

// get ID
$art_id = mysqli_real_escape_string($conn, $_GET['art_id']);

// Create Query
$query = 'SELECT * FROM posts WHERE art_id = '.$art_id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

?>