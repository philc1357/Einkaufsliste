<?php

$path = __DIR__ . "/JSON/liste.json";

if (file_exists($path)) {
    file_put_contents($path, json_encode([]));
}

header("Location: index.php");
exit;
