<?php
include 'config.php';
include 'header.php';
include 'popup.php';
?>


<!-- MAIN Hero -->

<main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('https://images4.alphacoders.com/129/1295471.jpg')">
        <div class="container">

          <h2 class="h1 hero-title">
          Nu 25% rabatt på<strong>Alla Produkter</strong>
          </h2>

          <h3 class="hero-text">
          Letar du efter den perfekta gåvan? Gör någons dag speciell med ett unikt val från vårt sortiment. Detta är ett utmärkt tillfälle att hitta den perfekta presenten, oavsett om det är till jul, födelsedag eller bara för att skämma bort någon du bryr dig om. Passa på och hitta den bästa gåvan redan idag!
          </h3>

          <!-- Enhanced Search bar -->
          <div class="search-container">
            <input type="text" class="search-input" placeholder="Sök här..." aria-label="Search">
            <button type="submit" class="search-btn">
                <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
            </button>
        </div>

        </div>
      </section>

      
      <!-- 
        - #COLLECTION
      -->
<!-- 
        - #COLLECTION
      -->
      <section class="section collection">
    <div class="container">
        <ul class="collection-list has-scrollbar">
            <li>
                <div class="collection-card" style="background-image: url('https://wallpapercave.com/wp/wp9353387.jpg')">
                    <h3 class="h4 card-title">Gåvor för män</h3>
                    <a href="men_gifts.php" class="btn btn-secondary">
                        <span>Utforska alla</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </li>
            <li>
                <div class="collection-card" style="background-image: url('https://images7.alphacoders.com/129/1297173.jpg')">
                    <h3 class="h4 card-title">Gåvor för kvinnor</h3>
                    <a href="women_gifts.php" class="btn btn-secondary">
                        <span>Utforska alla</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </li>

          
        </ul>
    </div>
</section>


<!-- 
  - #BESTSELLERS
-->
<section class="section bestsellers">
    <div class="container">
        <h2 class="section-title">Våra Bästsäljare</h2>
        <div class="products-grid">
            <?php
            // Anslut till databasen
            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

            // Kontrollera anslutning
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Hämta bästsäljande produkter
            $sql = "SELECT * FROM presents ORDER BY price DESC LIMIT 3"; // Anta att högre pris = bästsäljare
            $result = $conn->query($sql);

            // Kontrollera om det finns resultat och skriv ut dem
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    // Nu visas actions-container när musen är över kortet
                    echo "<div class='actions-container'>"; // Container for wishlist and cart buttons
                    echo "<button class='btn-wishlist' onclick='addToWishlist(" . htmlspecialchars($row['id']) . ")'>";
                    echo "<ion-icon name='heart-outline'></ion-icon>";
                    echo "</button>";
                    echo "<button class='btn-add-to-cart' onclick='addToCart(" . htmlspecialchars($row['id']) . ")'>";
                    echo "<ion-icon name='cart-outline'></ion-icon>";
                    echo "</button>";
                    echo "</div>"; // .actions-container
                    echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['title']) . "' class='product-image'>";
                    echo "<h3 class='product-title'>" . htmlspecialchars($row['title']) . "</h3>";
                    echo "<p class='product-description'>" . htmlspecialchars($row['description']) . "</p>";
                    echo "<p class='product-price'>kr" . htmlspecialchars(number_format($row['price'], 2, ',', '')) . "</p>";
                    echo "</div>"; // .product-card
                }
            } else {
                echo "<p>Inga bästsäljare att visa.</p>";
            }

            // Stäng anslutning
            $conn->close();
            ?>
        </div>
    </div>
</section>











</article>

</main>


<?php
include 'footer.php';
?>

