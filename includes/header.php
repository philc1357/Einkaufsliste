    <header class="<?= $theme ?>">
        <div><h1>Einkaufsliste</h1></div>
        <div>
            <form action="../set_theme.php" method="POST">
                <div class="center-align">
                    <input type="radio" name="theme" value="lightmode">
                    <label for="theme">Lightmode</label>
                    <input type="radio" name="theme" value="darkmode">
                    <label for="theme">Darkmode</label>
                    <button type="submit">X</button>
                </div>
            </form>
        </div>
    </header>