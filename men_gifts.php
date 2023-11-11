<?php
include 'config.php';
include 'header.php';
?>

<link rel="stylesheet" href="./style.css">
<script src="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons.js"></script> <!-- Add the Ionicons library -->
<main>
    <section class="section gifts">
        <div class="container">
            <h2>Presenter för honom</h2>

            <ul class="gift-list">
            <?php
            $sql = "SELECT id, title, image, description, price FROM presents WHERE gender='male'"; // Assuming there's an 'id' column for presents
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<li class='gift-item'>";
                    echo "<img src='" . $row["image"] . "' alt='" . $row["title"] . "'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<p>Pris: " . $row["price"] . " kr</p>";

                    echo "<ul class='card-action-list'>";
                    echo "<li class='card-action-item'>";
                    echo "<button class='fav-button fav-button-is-fav card-action-btn' data-product-id='" . $row["id"] . "' aria-labelledby='card-label-" . $row["id"] . "'>";
                    echo "<svg width='22' height='21' viewBox='0 0 22 21' fill='none' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M10.9932 4.13581C8.9938 1.7984 5.65975 1.16964 3.1547 3.31001C0.649644 5.45038 0.296968 9.02898 2.2642 11.5604C3.89982 13.6651 8.84977 18.1041 10.4721 19.5408C10.6536 19.7016 10.7444 19.7819 10.8502 19.8135C10.9426 19.8411 11.0437 19.8411 11.1361 19.8135C11.2419 19.7819 11.3327 19.7016 11.5142 19.5408C13.1365 18.1041 18.0865 13.6651 19.7221 11.5604C21.6893 9.02898 21.3797 5.42787 18.8316 3.31001C16.2835 1.19216 12.9925 1.7984 10.9932 4.13581Z' fill='' stroke='' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path></svg>";
                    echo "</button>";
                    echo "<div class='card-action-tooltip' id='card-label-" . $row["id"] . "'>Lägg till i önskelista</div>";
                    echo "</li>";
                    echo "</ul>";

                    echo "</li>";
                }
            } else {
                echo "<p>Inga presenter hittades</p>";
            }
            ?>
            </ul>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let wishlistButtons = document.querySelectorAll('.card-action-btn');

            wishlistButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    let giftId = this.getAttribute('data-product-id');
                    alert('Present med ID ' + giftId + ' har lagts till i önskelistan!');

                    // In a real-world scenario, you'd send the giftId to the server to store in the user's wishlist.
                });
            });
        });
    </script>

<?php
include 'footer.php';
?>
