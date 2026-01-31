<?php
$article = trim($_POST["article"]);

$einkaufsliste = file_exists("JSON/liste.json")
    ? json_decode(file_get_contents("JSON/liste.json"), true)
    : [];

$einkaufsliste[] = $article;

file_put_contents("JSON/liste.json", json_encode($einkaufsliste));

header("Location: index.php");
exit;
