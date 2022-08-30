<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="stylesheet" href="styles/quickclass.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- bootstrap icons cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   
    <title>Immo Démo</title>
</head>
<body>

    <!-- header -->
    <div class="header">
        <img src="./assets/logo-client.jpg" alt="Immo logo" class="header-logo" />
    </div>

    <!-- nav menu -->
    <nav class="nav-menu">
        <!-- menu pc -->
        <ul class="menu">
            <li class="nav-item">
                NOS OFFRES
            </li>
            <li class="nav-item">
                L'AGENCE
            </li>
            <li class="nav-item">
                NOS SERVICES
            </li>
            <li class="nav-item">
                CONTACT
            </li>
            <li class="nav-item">
                MON COMPTE
            </li>
            <!-- badge -->
            <li class="nav-item no-border">
                <div class="badge">
                    <i class="bi bi-heart"></i>
                </div>
            </li>
        </ul>
        <!-- menu mobile -->
        <button class="mobile-button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="menu-mobile">
            <li class="nav-item">
                NOS OFFRES
            </li>
            <li class="nav-item">
                L'AGENCE
            </li>
            <li class="nav-item">
                NOS SERVICES
            </li>
            <li class="nav-item">
                CONTACT
            </li>
            <li class="nav-item">
                MON COMPTE
            </li>
            <!-- badge -->
            <li class="nav-item no-border">
                <div class="badge">
                    <i class="bi bi-heart"></i>
                </div>
            </li>
        </ul>
    </nav>

    <!-- hero section -->
    <section class="hero-section">

        <h1 class="hero-first-title">VOTRE AGENCE</h1>
        <h1 class="hero-second-title">de proximité</h1>


        <!-- searchbar -->
        <form class="search-bar" action="" method="POST">
            <input class="vente-input" type="text" value="" name="vente" placeholder="Vente" />
            <input class="type-input" type="text" value="" name="type" placeholder="Type de biens" />
            <input class="location-input"type="text" value="" name="location" placeholder="Où ? ex: Région, Département, CP, Ville.." />
            <select class="distance-input" name="distance">
                <option value="0">0 Km</option>
                <option value="10">10 Km</option>
                <option value="50">50 Km</option>
                <option value="100">100 Km</option>
                <option value="101">+ de 100 Km</option>
            </select>

            <button class="submit-input" type="submit"><i class="bi bi-search"></i></button>

        </form>
    </section>

    <!-- first container -->
    <section class="container justify align">
        <div class="half-container">
            <img class="container-image" src="./assets/first-img-stock.png" alt="image de stock" />

        </div>
        <div class="half-container">
            <div class="inside-container inside-right col justify align">
                <h3> JE SOUHAITE</h3>
                <h2> Acheter / Louer</h2>
                <a class="inside-anchor"> TOUTES NOS OFFRES <i class="fa arrow">Arrow</i></a>

            </div>
        </div>
    </section>

    <!-- second container -->
    <section class="container col align justify">
        <h1 class="section-title"> Nos services </h1>
        <div class="container">
            <!-- cards -->
            <div class="section-card col align">
                <img class="section-card-img" src="./assets/first-card.png" alt=""/>
                <p class="section-card-text">Recevez nos dernières annonces </p>
                <a class="section-card-anchor justify align" href=""> CREER UNE ALERTE E-MAIL</a>
            </div>
            <div class="section-card col align">
                <img class="section-card-img" src="./assets/second-card.png" alt=""/>
                <p class="section-card-text"> Vous souhaitez connaître la valeur de votre bien ?</p>
                <a class="section-card-anchor justify align" href=""> ESTIMATION GRATUITE </a>
            </div>
            <div class="section-card col align">
                <img class="section-card-img" src="./assets/third-card.png" alt=""/>
                <p class="section-card-text"> Confiez nous votre bien à la vente </p>
                <a class="section-card-anchor justify align" href=""> DEPOSER VOTRE BIEN </a>
            </div>
        </div>

    </section>

    <!-- third container -->
    <section class="container justify">
        <div class="half-container">
            <div class="inside-container inside-left col justify">
                <h3 class="flex align-self-start margin-title"> NOTRE AGENCE</h3>
                <p class="inside-container-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Unde, maxime hic, quas beatae aut praesentium laboriosam 
                     ullam labore aperiam accusamus, eum saepe libero! Vitae, 
                     optio id. Itaque illo sint dolorum!
                </p>
                <a class="inside-anchor bottom-right align-self-end bottom-0"> LIRE LA SUITE <i class="fa arrow">Arrow</i></a>

            </div>
        </div>
        <div class="half-container">
            <img class="container-image" src="./assets/second-img-stock.png" alt="image de stock" />
        </div>

    </section>



    <!-- footer -->
    <footer class="footer-container col justify align padding-0">
        <!-- firstfooter section -->
        <h2 class="footer-title">AGENCE DEMO</h2>
        <p class="footer-address">550 avenue de Celleneuse 34500 MONTPELLIER -  tel. 04 90 30 45 15</p>
        <a class="footer-anchor justify align" href="#contact"><i class="fa-courrier"></i> NOUS ECRIRE</a>

            <!-- social links -->
        <div class="social-links-container">
                <a class="social-link"> <i class="bi bi-facebook"></i> </a>
                <a class="social-link"> <i class="bi bi-instagram"></i> </a>
                <a class="social-link"> <i class="bi bi-youtube"></i> </a>
        </div>

        <!-- second footer section -->
        <div class="container space-around box-shadow padding-0 margin-0">
            <!-- left -->
            <div class="info-left align">
                <a class="extra-anchor" href="/mention_legales">Mentions légales </a>
                <a class="extra-anchor" href="/bareme">Notre barème d'honoraires </a>
                <a class="extra-anchor" href="/acces_proprietaire">Accès Propriétaire </a>
            </div>
            <!-- right -->
            <div class="info-right align">
                <div class="extra-social-container align">
                    PARTAGER : 
                    <a href="" class="extra-social-link"><i class="bi bi-facebook"></i></a> 
                    
                    <a href="" class="extra-social-link"><i class="bi bi-instagram"></i></a>
                    <a href="" class="extra-social-link"><i class="bi bi-youtube"> </i></a>
                </div>
            </div>

        </div>
        <!-- third footer section -->
        <div class="container space-around padding-0">
                <!-- left -->
                <div class="info-left align">
                    <img class="logo-special" src="./assets/logo-unknown.png" alt="logo of something" />
                    <p>
                        Afin de vous offrir un confort de lecture permanent depuis votre PC, 
                        votre tablette ou votre smarphone, 
                        notre site s'adapte automatiquement aux différents types d'écrans.
                    </p>
                </div>
                <!-- right -->
                <div class="info-right align"> 
                    <img src="./assets/adapt-logo.png" class="adapt-logo" alt="adapt immobilier logo" />
                    <div class="adapt-info col border-right-gray">
                        <p>Logiciel immobilier Adapt Immo</p>
                        <p>Création site internet immobilier</p>
                        <p>Référencement site immobilier</p>
                    </div>
                    
                </div>

        </div>

    </footer>

    <script type="text/javascript" src="./javascript/mobilemenu.js"></script>
    
</body>
</html>