<?php 
    include 'config.php';
    
    $sql = "SELECT * FROM `master_article_head`";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Article ID: " . $row['msarth_id'] . "<br>";
        }
    } else {
        echo "No records found.";
    }
    
    $conn->close();
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Article Page</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>Website visit count:</div>
        <div class="website-counter"></div>

        <script>
            // When the page is loaded, increment the visitor count
            window.onload = function() {
                // Use AJAX to call the PHP script to update the visitor count
                fetch('update_visitor.php')
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Optionally, you can update the visitor count on the page
                            document.querySelector('.website-counter').innerText = data.newVisitorCount;
                        } else {
                            console.error("Failed to update visitor count.");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        </script>
    </body>
</html>