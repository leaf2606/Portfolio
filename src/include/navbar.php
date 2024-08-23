<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Navbar</title>
</head>

<body>

    <header class="nav-cote">
        <div class="navbar-cote">
            <ul class="links">
                <li class="lien-cote"><a href="../index.php">Accueil</a></li>
                <li class="lien-cote"><a href="../index.php#projet-pro">Projet Professionnel</a></li>
                <a href="" class="logo">Mon Portfolio</a>
                <li class="lien-cote"><a href="../index.php#projet-perso">Projet Personnel</a></li>
                <li class="lien-cote"><a href="../index.php#projet-perso">Infos</a></li>
                <li class="lien-cote"><a href="../index.php#contact">Contact</a></li>
            </ul>

            <div class="burger-menu-button">
                <img src="../img/menu-burger1.png" alt="menu-burger" class="burger-menu-button">
            </div>


        </div>
        <div class="burger-menu-cote">
            <ul class="links">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../index.php#projet-pro">Projet Pro</a></li>
                <li><a href="../index.php#projet-perso">Projet Perso</a></li>
                <li><a href="../index.php#projet-perso">Infos</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <script>
    const burgerMenuButton = document.querySelector('.burger-menu-button')
    const burgerMenuButtonIcon = document.querySelector('.burger-menu-button')
    const burgerMenu = document.querySelector('.burger-menu-cote')

    burgerMenuButton.onclick = function() {
        burgerMenu.classList.toggle('open')
        const isOpen = burgerMenu.classList.contains('open')
        burgerMenuButtonIcon.classList = isOpen ? 'burger-menu-button' : 'burger-menu-button'
    }
    </script>

</body>

</html>