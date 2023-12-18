<?php
// Including essential layout components
include 'header.php';
include 'popup.php';

// Including the database configuration
include 'config.php';

// Check if the 'search' parameter is set in the URL
if (isset($_GET['search'])) {
    // Safely escape the search term to prevent SQL injection
    $searchTerm = $conn->real_escape_string($_GET['search']);

    // Initialize an empty category query
    $categoryQuery = "";

    // Setting category query based on specific search terms
    switch ($searchTerm) {
        case 'Gåvor för män':
            $categoryQuery = " WHERE category = 'Gåvor för män'";
            break;
        case 'Gåvor för kvinnor':
            $categoryQuery = " WHERE category = 'Gåvor för kvinnor'";
            break;
        case 'Romantiska Gåvor':
            $categoryQuery = " WHERE category = 'Romantiska Gåvor'";
            break;
        // Add additional cases as needed
    }

    // Prepare the SQL query with or without category filter
    $sql = "SELECT * FROM presents" . $categoryQuery;
    if (empty($categoryQuery)) {
        $sql .= " WHERE title LIKE CONCAT('%', ?, '%')";
    }

    // Preparing the SQL statement
    if ($stmt = $conn->prepare($sql)) {
        // Binding parameters for general search
        if (empty($categoryQuery)) {
            $stmt->bind_param("s", $searchTerm);
        }

        // Executing the prepared statement
        $stmt->execute();
        $result = $stmt->get_result();

        // Displaying the search results
        if ($result->num_rows > 0) {
            echo "<div class='gifts'>"; // Start of the gifts section
            echo "<div class='gift-list'>"; // Start of the gift list

            while ($row = $result->fetch_assoc()) {
                echo "<div class='gift-item'>"; // Each item as a gift item
                // Assume an 'image' field exists in your database. Replace with actual field name if different
                echo "<img src='" . htmlspecialchars($row['image']) . "' alt='Gift Image' class='gift-image'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "<p>Price: " . htmlspecialchars($row['price']) . "</p>";
                echo "</div>"; // End of the gift item
            }

            echo "</div>"; // End of the gift list
            echo "</div>"; // End of the gifts section
        } else {
            // No results found message
            echo "<p>Inga resultat hittades för söktermen '" . htmlspecialchars($searchTerm) . "'</p>";
        }

        // Closing the statement
        $stmt->close();
    } else {
        // Handling errors in statement preparation
        echo "Error in query preparation: " . htmlspecialchars($conn->error);
    }
}

// Closing the database connection
$conn->close();
?>

<?php
// Including the footer for page layout consistency
include 'footer.php';
?>
