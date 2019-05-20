<?php  

    // Create Query
    $query = 'SELECT * FROM posts WHERE art_status = 1 ORDER BY art_date DESC LIMIT 4';
	
	// Get Result
	$result = mysqli_query($conn, $query);

	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
    mysqli_close($conn);

?>
