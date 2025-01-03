<?php
session_start();

require_once("connect.php");

$sql = "SELECT * FROM lien";

$query = $db->prepare($sql);
$query->execute();
$lien = $query->fetch(PDO::FETCH_ASSOC);

$projetproImages = $db->query("SELECT * FROM lien WHERE section = 'projet-pro'")->fetchAll(PDO::FETCH_ASSOC);
$projetpersoImages = $db->query("SELECT * FROM lien WHERE section = 'projet-perso'")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Mon Portfolio</title>
</head>

<body>

    <a name="haut"></a>

    <?php include_once("./include/navbar.php"); ?>

    <section id="accueil"><br><br>
        <p class="prenom">Bonjour, je suis <span class="nom">Léa Fort</span></p>
        <p class="text-sous">Je suis développeuse web actuellement en formation chez Onlineformapro à Nevers ...
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit
            anim id est laborum
        </p>
        <br><br>

        <div class="logo-reseaux">
            <a href="https://github.com/" target="_blank"><img src="../img/github.png" alt="github" class="reseaux"></a>
            <a href=""><img src="../img/linkedin.png" alt="linkedin" class="reseaux"></a>
            <a href="" target="_blank"><img src="../img/cv.png" alt="cv" class="reseaux"></a>
        </div>

        <div>
            <a href="#projet-pro"><img src="../img/fleche-bas.png" alt="fleche-bas" class="fleche-bas"></a>
        </div>

    </section><br><br>

    <section id="projet-pro">
        <ul>
            <li class="lien-index"><a href="#">Projet Professionnel</a></li>
        </ul><br><br>
        <div class="border">
            <ul>
                <?php foreach ($projetproImages as $image): ?>
                <li class="lien"><a href="<?= htmlspecialchars($image['a']); ?>" target="_blank"><img
                            src="<?= htmlspecialchars($image['img']); ?>" alt="<?= htmlspecialchars($image['alt']); ?>">
                        <div class="content">
                            <p class="description"><?= htmlspecialchars($image['description']); ?>
                        </div>
                    </a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section><br><br>

    <section id="projet-perso"><br><br>
        <ul>
            <li class="lien-index"><a href="#">Projet Personnel</a></li>
        </ul><br><br>
        <div class="border">
            <ul>
                <?php foreach ($projetpersoImages as $image): ?>
                <li class="lien">
                    <a href="<?= htmlspecialchars($image['a']); ?>"
                        target="<?= htmlspecialchars($image['target']); ?>"><img
                            src="<?= htmlspecialchars($image['img']); ?>" alt="<?= htmlspecialchars($image['alt']); ?>">
                        <div class="content">
                            <p class="description"><?= htmlspecialchars($image['description']); ?>
                        </div>
                        </p>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section><br><br>

    <section id="infos-competences"><br><br>
        <ul>
            <li class="lien-index"><a href="#">Infos et Compétences</a></li>
        </ul>
    </section>

    <div class="skill">
        <div class="container-bar">

            <div class="text-infos">

                <p class="infos">Stage en entreprise :</p>

                <p class="infos">Novembre 2023 Trade&Art<br>
                    Stage graphiste Créative à la réalisation de support visuel<br>
                    Nevers (58)</p>

                <p class="infos">Août 2023 Davi the humanizers<br>
                    Stage graphiste<br>
                    Varennes-Vauzelles (58)</p>

            </div>
            <div class="name">
                <span>HTML</span>
                <span>CSS</span>
                <span>JAVASCRIPT</span>
                <span>PHP</span>
                <span>REACT</span>
                <span>RESPONSIVE</span>
            </div>
            <div class="bar-container">
                <div class="bar">
                    <div class="progress"></div>
                </div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
                <div class="bar">
                    <div class="progress"></div>
                </div>
            </div><br><br>
        </div>
    </div>

    <a href="#haut"><img class="fleche" src="../img/fleche-haut.png" alt="fleche"></a><br>

    <?php include_once("./include/footer.php"); ?>

</body>

</html>