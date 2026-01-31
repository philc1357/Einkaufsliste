<?php
session_start();
$theme = $_POST["theme"];

if (isset($theme)) {
    if ($theme == "darkmode") {
        $_SESSION["theme"] = "darkmode";
    }
    if ($theme == "lightmode") {
        $_SESSION["theme"] = "lightmode";
    }
    header("Location: index.php");
    exit;
}