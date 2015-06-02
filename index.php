<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Biblio</title>
    <link href="style.css"
          type="text/css"
          rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <header id="banner">
            <?php
                include 'includes/banner.php';
            ?>
        </header>
        <div id="main-content">
            <asside id="left-menu">
                <?php
                    include 'includes/menu.php';
                ?>
            </asside>
            <section id="content">
                <p>
                    Projet de gestion d'une petite bibliothèque
                    dans le cadre d'un cours de base d'initiation
                    à la gestion des bases de données et de la programmation
                    en PHP.
            </section>

            <div class="break-float"></div>
        </div>

        <footer id="footer">
            <?php
                include 'includes/footer.php';
             ?>
        </footer>
    </div>
</body>
</html>
