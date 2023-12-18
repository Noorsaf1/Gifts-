<?php
$dynamicTitle = "Presentgatan";
$currentDate = date('Y-m-d');
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dynamicTitle; ?></title>

    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    

    <!-- custom css link -->
    <link rel="stylesheet" href="./style.css">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- preload banner -->
    <link rel="preload" href="./assets/images/hero-banner.png" as="image">
  

</head>

<body id="top">

    <!-- HEADER -->
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>
            <a href="index.php" class="logo">
                <h1> Presentgatan <strong>.se</strong></h1>
            </a>
            <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                <ion-icon name="menu-outline"></ion-icon>
            </button>
            <nav class="navbar" data-navbar>
                <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                    <ion-icon name="close-outline"></ion-icon>
                </button>
                <a href="#" class="logo">
                    <h1> Presentgatan</h1>
                </a>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="./index.php" class="navbar-link">Hem</a>
                    </li>
                    <li class="navbar-item">
                        <a href="./Tips.php" class="navbar-link">Presenttips
</a>
                    </li>


                    
                </ul>
                <ul class="nav-action-list">
             <!-- Search Form -->
<!-- Search Form -->
<li>
    <form action="search_page.php" method="get" class="nav-search-form">
        <input type="text" name="search" placeholder="Search..." aria-label="Search" required class="nav-search-input" style="display: none;">
        <button type="submit" class="nav-action-btn" id="searchToggle">
            <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
            <span class="nav-action-text">Search</span>
        </button>
    </form>
</li>

                    <li>
                        <a href="#" class="nav-action-btn">
                            <ion-icon name="filter-outline" aria-hidden="true"></ion-icon>
                            <span class="nav-action-text">Filter</span>
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.php" class="nav-action-btn">
                            <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                            <span class="nav-action-text">Wishlist</span>
                            <data class="nav-action-badge" aria-hidden="true"><?php echo $_SESSION['wishlist_count'] ?? '0'; ?></data>
                        </a>
                    </li>

                  
                </ul>
            </nav>
        </div>
    </header>

    

    <script src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>

    <script>
// Function to add an item to the wishlist
function addToWishlist(productId) {
    fetch('add_to_wishlist.php', {
        method: 'POST',
        body: JSON.stringify({ productId: productId }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Update the wishlist counter
        const wishlistCounter = document.querySelector('.nav-action-badge');
        wishlistCounter.textContent = data.newWishlistCount;
    })
    .catch(error => console.error('Error:', error));
}

// Attach the event listener to wishlist buttons (considering they exist at the time this script runs)
document.querySelectorAll('.btn-wishlist').forEach(button => {
    button.addEventListener('click', function() {
        const productId = this.dataset.productId;
        addToWishlist(productId);
    });
});


document.addEventListener('DOMContentLoaded', function() {
        const searchToggle = document.getElementById('searchToggle');
        const searchInput = document.querySelector('.nav-search-input');

        searchToggle.addEventListener('click', function(event) {
            if (searchInput.style.display === 'none' || searchInput.style.display === '') {
                event.preventDefault(); // Prevent the form from submitting
                searchInput.style.display = 'block'; // Show the input
                searchInput.focus(); // Automatically focus on the input
            } else {
                // Optional: Hide the input again if the icon is clicked and the input is already visible
                searchInput.style.display = 'none';
            }
        });
    });

</script>


</body>

</html>
