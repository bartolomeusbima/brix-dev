<?php
    include 'config.php';
    
    // Assuming there's only one article, so we update the first record. 
    // If you want to update a specific article, you can modify the WHERE condition to target it.
    $sql = "UPDATE `master_article_head` SET msarth_visitor = msarth_visitor + 1 WHERE msarth_id = 1";
    
    // Run the update query
    if ($conn->query($sql) === TRUE) {
        // Fetch the new visitor count after the update
        $result = $conn->query("SELECT msarth_visitor FROM master_article_head WHERE msarth_id = 1");
        $row = $result->fetch_assoc();
        $newVisitorCount = $row['msarth_visitor'];
    
        // Send a JSON response back to the client with the new visitor count
        echo json_encode([
            'success' => true,
            'newVisitorCount' => $newVisitorCount
        ]);
    } else {
        // Send an error response
        echo json_encode([
            'success' => false,
            'message' => 'Failed to update visitor count'
        ]);
    }
    
    // Close the database connection
    $conn->close();
?>