<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Present Details</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="gifts">
            <div class="gift-list">
                <?php
                include 'config.php'; // Include the database connection

                $presentId = isset($_GET['id']) ? (int)$_GET['id'] : 0; // Get the present ID from the URL

                $query = $conn->prepare("SELECT * FROM presents WHERE id = ?"); // Prepare the SQL query using MySQLi
                $query->bind_param("i", $presentId);
                $query->execute();
                $result = $query->get_result();

                if ($present = $result->fetch_assoc()) { // Check if present details are found
                    echo "<div class='gift-item'>";
                    echo "<h3>" . htmlspecialchars($present['title']) . "</h3>";
                    echo "<p>" . htmlspecialchars($present['description']) . "</p>";

                    if (!empty($present['image'])) { // Display image if available
                        echo "<img src='" . htmlspecialchars($present['image']) . "' alt='" . htmlspecialchars($present['title']) . "'>";
                    }

                    echo "<p class='price'>Price: " . htmlspecialchars(number_format($present['price'], 2)) . " SEK</p>";
                    echo "</div>";
                } else {
                    echo "<p>Present information not available.</p>";
                }

                $query->close(); // Close the statement
                $conn->close(); // Close the connection
                ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
