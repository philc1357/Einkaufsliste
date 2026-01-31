<?php
    session_start();
    $theme = $_SESSION["theme"];
    if (!isset($_SESSION["theme"])) {
        $_SESSION["theme"] = "lightmode";
    }

    $einkaufsliste = file_exists("JSON/liste.json")
    ? json_decode(file_get_contents("JSON/liste.json"), true)
    : [];
?>

<!DOCTYPE html>
<html lang="en">
<?php include"includes/head.html"; ?>
<body class="<?= $theme ?>">
    <?php include"includes/header.php"; ?>

    <main>
        <section>
            <article>
                <form action="add_article.php" method="POST">
                    <div>
                        <input type="text" name="article" class="input">
                        <input type="submit" value="Hinzufügen" class="btn btn-success">
                    </div>
                </form>
            </article>
            <article>
                <h1>Aktuelle Einkaufsliste:</h1>
                <ul>
                    <?php foreach ($einkaufsliste as $item) : ?>
                            <li><p><?= $item ?></p></li>
                    <?php endforeach; ?>
                </ul>
            </article>
            <article>
                <form action="delete_list.php" method="POST">
                    <button type="submit" name="delete" value="1" class="btn btn-error">Einkaufsliste löschen</button>
                </form>

            </article>
        </section>
    </main>
</body>
</html>