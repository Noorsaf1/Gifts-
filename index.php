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

      <section class="section hero" style="background-image: url('./assets/img/main_image1.webp')" alt="main-hero" >
        <div class="container">

          <h2 class="h1 hero-title">
          Nu 25% rabatt på<strong>Alla Produkter</strong>
          </h2>

          <h3 class="hero-text">
          Hitta den perfekta presenten på Presentgatan.se! Utforska unika och personliga gåvor för varje tillfälle. Gör varje ögonblick minnesvärt.
          </h3>

        <!-- Enhanced Search Bar -->
        <div class="search-container">
            <form action="search.php" method="get">
                <input type="text" class="search-input" name="search" placeholder="Sök här..." aria-label="Search">
                <button type="submit" class="search-btn" aria-label="Search">
                    <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
                </button>
            </form>
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
                <div class="collection-card" style="background-image: url('./assets/img/image4.webp')" alt="image4" >
                    <h3 class="h4 card-title">Gåvor för män</h3>
                    <a href="men_gifts.php" class="btn btn-secondary">
                        <span>Utforska alla</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </li>
            <li>
                <div class="collection-card" style="background-image: url('./assets/img/image2.webp')" alt="image2">
                    <h3 class="h4 card-title">Gåvor för kvinnor</h3>
                    <a href="women_gifts.php" class="btn btn-secondary">
                        <span>Utforska alla</span>
                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </li>

            <li>
                <div class="collection-card" style="background-image: url('./assets/img/image0.webp')" alt="imgae0">
                    <h3 class="h4 card-title">Romantiska Gåvor</h3>
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
<?php include 'Gifts_tips.php'; ?>



</article>

</main>


<?php
include 'footer.php';
?>

