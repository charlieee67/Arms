<?php
session_start();

if (isset($_POST["product"])) {

    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    $_SESSION["cart"][] = $_POST["product"];
}

header("Location: product.php");
exit();

?>