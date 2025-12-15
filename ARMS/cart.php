<?php
// session_start();
include "db.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Your Cart</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <style>
        body, nav, footer {
            background-image: linear-gradient(to right, black, rgb(137, 37, 37), black);
        }
        .cart-box {
            background-color: #111;
            border-radius: 10px;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
</head>

<body class="bg-black">

<!-- NAVBAR (same style as home.php) -->
<nav class="navbar navbar-expand-sm navbar-dark bg-black">
    <img
        src="https://stallionguns.com/images/logo.png"
        height="40"
        width="80"
        class="img-fluid rounded mx-5"
        alt=""
    />
</nav>

<!-- MAIN -->
<main class="container my-5">

    <h3 class="text-center text-white mb-4" style="font-family: 'Franklin Gothic Medium';">
        Your Cart
    </h3>

    <div class="container col-6 cart-box p-4 text-white">

            <?php if (!empty($_SESSION["cart"])): ?>
                <ul class="list-group list-group-flush">
                    <?php foreach ($_SESSION["cart"] as $item): ?>
                        <li class="list-group-item bg-transparent text-white border-secondary">
                            <?= htmlspecialchars($item) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-warning text-center">Your cart is empty</p>
            <?php endif; ?>

        <div class="text-center mt-4">
            <a href="product.php" class="btn btn-warning px-4">
                Back to Products
            </a>
        </div>

    </div>

</main>

<!-- FOOTER -->
<footer class="bg-black p-2 text-center text-white m-1">
    <hr>
    <span style="color: black; font-size: larger; font-weight: 500;">
        &copy; Stallion store , All Rights Reserved By Charlie
    </span>
    <hr>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>
