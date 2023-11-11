<?php
include 'config.php';
include 'header.php';
?>

<main>
    <section class="section gifts">
        <div class="container">
            <h2>Presenter för henne</h2>

            <ul class="gift-list">
            <?php
            // Hämta presenter för kvinnor från databasen
            $sql = "SELECT title, image, description, price FROM presents WHERE gender='female'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li class='gift-item'>";
                    echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<p>Pris: " . $row["price"] . " kr</p>";
                    echo "</li>";
                }
            } else {
                echo "<p>Inga presenter hittades</p>";
            }
            ?>
            </ul>
        </div>
    </section>
</main>

<?php
include 'footer.php';
?>
