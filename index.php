<?php

    // Sécurisation
    header("Content-Security-Policy: default-src 'self'; script-src 'self' https://apis.google.com https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' https://crea-troyes.fr;");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header('Cache-Control: public, max-age=31536000, immutable');


    // Inclusion des fichiers
    require_once 'library/blog.php';
    require_once 'library/svg.php';
    require_once 'library/array.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alban Guillier | Développeur Web Freelance & Formateur</title>
    <meta name="description" content="Alban GUILLIER, développeur web en freelance depuis 2006 et formateur. Découvrez mes projets, mes formations informatique et mon agence web Créa-Troyes.">
    <meta name="author" content="Alban Guillier">
    <meta name="robots" content="index, follow">
    <link rel="preload" href="img/bg.webp" as="image">
    <link rel="canonical" href="https://votre-site.fr">
    <link rel="stylesheet" href="css/styles_portfolio-min.css" media="print" onload="this.media='all'" defer>
    <meta property="og:title" content="Alban Guillier - Développeur Web & Formateur | Créa-Troyes">
    <meta property="og:description" content="Découvrez mes projets et formations sur Créa-Troyes, agence web spécialisée en développement web.">
    <meta property="og:image" content="https://portfolio.crea-troyes.fr/img/creatroyes.webp">
    <meta property="og:url" content="https://portfolio.crea-troyes.fr">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alban Guillier- Développeur Web & Formateur | Créa-Troyes">
    <meta name="twitter:description" content="Découvrez mes projets et formations sur Créa-Troyes, agence web spécialisée en développement web.">
    <meta name="twitter:image" content="https://portfolio.crea-troyes.fr/img/creatroyes.webp">
    <link rel="shortcut icon" href="https://crea-troyes.fr/img/favicon.png">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Alban Guillier",
            "jobTitle": "Développeur Web & Formateur",
            "url": "https://crea-troyes.fr",
            "sameAs": [
                "https://twitter.com/creatroyes",
                "https://www.twitch.tv/creatroyes",
                "https://www.instagram.com/creatroyes/",
                "https://github.com/crea-troyes",
                "https://www.youtube.com/@creatroyes",
                "https://fr.pinterest.com/Creatroyes/"
            ]
        }
    </script>
    <style>

        /* poppins-300 - latin */
        @font-face {
        font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 300;
        src: url('fonts/poppins-v22-latin-300.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* poppins-regular - latin */
        @font-face {
        font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        src: url('fonts/poppins-v22-latin-regular.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* poppins-500 - latin */
        @font-face {
        font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        src: url('fonts/poppins-v22-latin-500.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* poppins-600 - latin */
        @font-face {
        font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        src: url('fonts/poppins-v22-latin-600.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* poppins-800 - latin */
        @font-face {
        font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 800;
        src: url('fonts/poppins-v22-latin-800.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }
        /* poppins-900 - latin */
        @font-face {
        font-display: swap; /* Check https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display for other options. */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 900;
        src: url('fonts/poppins-v22-latin-900.woff2') format('woff2'); /* Chrome 36+, Opera 23+, Firefox 39+, Safari 12+, iOS 10+ */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bleu : #07c;
            --secondary: #adf;
            --dark : #333;
            --lightDark : #444;
            --gray : #777;
            --lightGray: #999;
            --bg_gris : #f8f9fa;
            --font : "poppins", sans-serif;
            --border: #ccc;
            --borderForm: #aaa;
            --shadow: #ddd;
            --noir: #000;
            --blanc: #fff;
        }

        /* Éléménts */
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: var(--font);
        }

        a {
            text-decoration: none;
            color: var(--noir);
            font-weight: 600;
        }
        a.bleu {
            color: var(--bleu);
            cursor: default;
        }
        a:hover {
            color: var(--bleu);
        }
        p a {
            color: var(--bleu);
            font-weight: 400;
        }
        p a:hover {
            text-decoration: underline;
        }
        h1 {
            font-size: 55px;
            color: var(--dark);
            line-height: 1.2;
            font-weight: 800;
            margin: 10px 0;
        }
        h2 {
            font-size: 40px;
            color: var(--dark);
            line-height: 1.5;
            font-weight: 600;
            margin: 10px 0 20px;
        }
        h3, .h3 {
            font-size: 88px;
            font-weight: 900;
            color: var(--dark) !important;
        }
        .h3 {
            line-height: 1.1 !important;
        }
        hr {
            display: block;
            width: 200px;
            margin: 20px auto;
            border: none;
            border-top: 2px solid var(--gray);
        }

        /* Classe */
        .bg_gris {
            background: var(--bg_gris);
        }

        .none {
            display: none;
        }

        .center {
            text-align: center;
        }

        .top80 {
            margin-top: 80px;;
        }

        .top50 {
            margin-top: 50px;;
        }

        .top40 {
            margin-top: 40px;;
        }

        .top30 {
            margin-top: 30px;;
        }

        .bottom15 {
            margin-bottom: 15px;
        }

        .type-none {
            list-style-type: none;
        }

        .gras600 {
            font-weight: 600;
            color: var(--dark);
        }

        .btn {
            display: inline-block;
            color: var(--dark);
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            cursor: pointer;
            font-weight: 500;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0px 24px 36px -11px rgba(0, 0, 0, 0.09);
            -moz-box-shadow: 0px 24px 36px -11px rgba(0, 0, 0, 0.09);
            box-shadow: 0px 24px 36px -11px rgba(0, 0, 0, 0.09);
            text-decoration: none;
        }

        .btn-primary {
            color: var(--blanc);
            background-color: var(--bleu);
            border-color: var(--bleu);
        }

        .btn-primary:hover {
            color: var(--blanc);
            background-color: var(--dark);
            border-color: var(--dark);
        }

        .btn-transparent {
            color: var(--bleu);
            background-color: var(--blanc);
            border-color: var(--bleu);
        }

        .btn-transparent:hover {
            color: var(--blanc);
            background-color: var(--dark);
            border-color: var(--dark);
        }

        .container, .container1024 {
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            max-width: 900px;
        }

        .container1024 {
            max-width: 1024px !important;
        }

        .bandeau {
            padding: 80px 0;
            width: 100%;
            font-size: 28px;
            line-height: 1.5;
            font-weight: 500;
        }
        .bandeau p {
            margin-bottom: 10px;
        }
        .bandeau p:last-child, .frelance {
            font-weight: 400;
            font-size: 20px;
            color: var(--gray);
        }
        .bandeau span, footer div span {
            color: var(--bleu);
            font-weight: 800;
            display: block;
            margin: -20px auto 30px;
            font-size: 48px;
            text-align: center;
        }

        /* En-tête */
        #menu_haut {
            position: absolute;
            top: 0;
            right:0;
            padding: 40px 7% 0 0;
        }
        #menu_haut ul li {
            list-style-type: none;
            display: inline;
        }
        #menu_haut ul li a {
            font-size: 14px;
            padding: .7rem 20px;
            text-transform: uppercase;
        }
        #logo {
            position: absolute;
            top: 37px;
            left: 5%;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
        }
        #logo img {
            height: 20px;
            position: relative;
            top: 4.5px;
            left:-1px;
        }

        .menu-icon {
            font-size: 30px;
            cursor: pointer;
            display: none;
            color: white;
            position: absolute;
            top: 15px;
            right: 20px;
            z-index: 101;
        }

        .menu-open {
            display: block;
        }

        .menu-close {
            display: none;
        }

        #menu-toggle {
            display: none;
        }

        /* Page */
        .cle {
            display: inline-block;
            width: 160px;
            font-weight: 600;
            color: var(--dark);
            font-size: 20px;
        }
        .valeur {
            font-weight: 600;
            color: var(--bleu);
            font-size: 20px;
        }


        /* Responsive */
        @media (max-width: 868px) {
            .menu {
                display: none;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: white;
                z-index: 100;
                text-align: center;
            }
            .menu li {
                margin: 15px 0;
            }
            .menu li a {
                font-size: 2em !important;
            }
            #menu-toggle:checked + .menu-icon + .menu {
                display: flex;
            }

            .menu-icon {
                display: block;
            }

            /* Afficher la croix quand le menu est ouvert */
            #menu-toggle:checked + .menu-icon .menu-open {
                display: none;
            }

            #menu-toggle:checked + .menu-icon .menu-close {
                display: block;
                color: var(--dark);
            }
        }

        #header {
            background: url(img/bg.webp) no-repeat center center/cover;
            height: 80vh;
            min-height: 380px;
        }

        #header #bg {
            background-image: url("img/alban-guillier-small.webp");
            background-position: bottom right 25%;
            background-size: 50vh auto;
            background-repeat: no-repeat;
            height: 80vh;
            min-height: 380px;
        }

        #header div div {
            position: relative;
            top: calc(40vh - 60px);
            width: 87%;
            left: 13%;
        }
        #header div span, .text_gris {
            color: var(--gray);
            font-weight: 600;
            font-size: 14px !important;
            letter-spacing: 3px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <a href="https://crea-troyes.fr" id="logo"><img height="24" width="24" src="img/logo-crea-troyes.webp" alt="logo Créa-troyes">réa-troyes</a>

    <nav id="menu_haut" class="navbar" aria-label="Navigation principale du site">
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon" aria-label="Ouvrir/fermer le menu">
            <span class="menu-open">&#9776;</span>
            <span class="menu-close">&times;</span>
        </label>
        <ul class="menu">
            <li><a href="https://crea-troyes.fr">Agence</a></li>
            <li><a class="bleu" href="https://crea-troyes.fr/freelance-informatique.html">Freelance</a></li>
            <li><a href="https://crea-troyes.fr/creation-site-e-commerce.html">E-Commerce</a></li>
            <li><a href="https://formation.crea-troyes.fr/">Formation</a></li>
            <li><a href="https://blog.crea-troyes.fr">Blog</a></li>
            <li><a href="https://crea-troyes.fr/contact.html">Contact</a></li>
        </ul>
    </nav>

    <header id="header">
        <div id="bg">
            <div>
                <span class="text_gris">Développeur freelance</span>
                <h1>GUILLIER Alban</h1>
                <nav>
                    <a class="btn btn-primary" href="https://crea-troyes.fr">Mon Agence</a>
                    <a class="btn btn-transparent" href="#ancre">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main>

        <article class="bg_gris bandeau">
            <div class="container">
                <h2 class="none">Alban Guillier - Développeur freelance</h2>
                <span>&lt;</span>
                <p class="center">Développeur freelance depuis 2006, je suis spécialisé dans la création de sites web et d'applications mobile sur mesure.</p>
                <hr>
                <p class="center">Passionné par mon métier, tout est mis en oeuvre afin de satisfaire mes clients.</p>
            </div>
        </article>

        <article class="container">
            <div class="presentation">
                <p class="h3">Un peu plus sur moi</p>
                <div>
                    <span class="text_gris">qui suis-je ?</span>
                    <h2>Mon parcours</h2>
                    <p>Fondateur de différents projets, dont l'agence <a href="https://crea-troyes.fr">Créa-troyes</a>, 
                    dédiée au développement web et à la <a href="https://formation.crea-troyes.fr">formation en ligne</a>, je partage mes 
                    connaissances à travers le <a href="https://blog.crea-troyes.fr">Créa-blog</a> et des 
                    lives sur <a href="https://www.twitch.tv/creatroyes">Twitch</a>.</p>

                    <p>J'ai développé également <a href="https://easyframe.crea-troyes.fr">EasyFrame</a>, un 
                    framework PHP conçu dans le but de simplifier le travail des développeurs.</p>

                    <ul class="top40 type-none">
                        <li class="bottom15"><span class="cle">Nom :</span><span class="valeur">GUILLIER Alban</span></li>
                        <li class="bottom15"><span class="cle">eMail :</span><span class="valeur"><a class="bleu" href="mailto:contact@crea-troyes.fr">contact@crea-troyes.fr</a></span></li>
                        <li class="bottom15"><span class="cle">Téléphone :</span><span class="valeur"><a class="bleu" href="tel:+33633925437">+33 06 33 92 54 37</a></span></li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="competence bg_gris bandeau">
            <div class="container">
                <p class="text_gris center">Mes compétences</p>
                <div id="cards"><?= $compétence; ?></div>
                <p class="center">Je suis développeur full-stack en freelance <strong class="gras600">disponible sur l'ensemble de la France</strong> et  
                expert en développement et gestion de projets web et mobile depuis plus de <?= date('Y') - 2006; ?> ans.</p>
            </div>
        </article>

        <article class="services">
            <div class="container1024">
                <p class="top80 text_gris center">Mes services</p>
                <h2 class="center">Tous les avantages du free-lance</h2>
                <p class="center">Volontairement sans local commercial afin de réduire les frais inutiles !</p>
                <div class="liste-service"><?= $service; ?></div>
                <p class="certif top80 center"><?= $svg_ads; ?> <a href="https://skillshop.credential.net/profile/albanguillier/wallet">Alban Guillier est certifié Google Ads et Google Analytics</a></p>
            
                <p class="frelance top50 center">Le statut de développeur freelance comporte <strong class="gras600">de nombreux avantages lorsqu'on est une entreprise</strong>. Cela lui assure souplesse, expertise et avis extérieur. Sans obligation d’engagement, les tâches effectuées varient en fonction des besoins.</p>
            
            </div>
        </article>

        <div id="bandeau_contact">
            <article class="bg_gris bandeau top80 lazy-bg" data-bg="img/pouce.webp">
                <div class="container1024">
                    <h4>Vous avez un projet en tête ?</h4>
                    <p>N'attendez pas, contactez-moi. M’enrichissant de mes expériences passées, ma présence sera un plus pour votre entreprise.</p>
                    <a class="btn btn-primary" href="https://crea-troyes.fr/contact.html">Contactez-moi</a>
                </div>
            </article>
        </div>

        <article class="services">
            <div class="container1024">
                <p class="top80 text_gris center">Réalisations</p>
                <h2 class="center">Mes derniers projets</h2>
                <p class="center">Parmi toutes mes réalisations, voici les derniers projets mis en ligne :</p>
            </div>
            <div class="liste-image container1024"><?= $projet; ?></div>
        </article>

        <article class="contact bg_gris top80">
            <div class="container1024">
                <p class=" text_gris center">Formulaire</p>
                <h2 id="ancre" class="center">Contactez-moi dès maintenant</h2>
                <form method="POST" id="contact">
                    <fieldset>
                        <input type="text" name="nom" placeholder="Nom *" required>
                        <input type="email" name="email" placeholder="eMail *" required>
                    </fieldset>
                    <fieldset>
                        <input type="tel" name="telephone" placeholder="Téléphone *" required>
                        <input type="text" name="entreprise" placeholder="Entreprise">
                    </fieldset>
                    <textarea name="message" placeholder="Votre message *" required></textarea>
                    <p class="center"><button type="submit" class="btn btn-primary top30">Envoyer le formulaire</button></p>
                    <input type="text" name="honeypot" style="display: none;">
                </form>
                <script src="js/contact-min.js" defer></script>
                <script src="js/sweetalert.js" defer></script>
            </div>
        </article>

        <article class="actualite">
            <div class="container1024">
                <p class="top80 text_gris center">actualités</p>
                <h2 class="center">Mes dernières parutions</h2>
            </div>
            <ul class="container1024"><?= $blog; ?></ul>
            <p class="center top30"><a href="https://blog.crea-troyes.fr/liste-des-tutoriels/">Tous mes tutoriels</a></p>
        </article>

        <article class="container1024">
            <div id="seo">
                <p>Alban Guillier, spécialiste du développement web, met son expertise au service de projets digitaux alliant performance
                et créativité. Avec une solide expérience en programmation et en gestion de sites internet, chaque réalisation reflète 
                une approche technique précise et une vision innovante.</p>
                <p>Passionné par la conception web, je travaille avec des technologies comme les langages de programmation HTML, CSS, 
                JavaScript et PHP ainsi que les CMS et Framework majoritairement utilisés
                offrant ainsi des solutions adaptées aux besoins spécifiques de chaque projet. Mon savoir-faire s’étend également à 
                l’optimisation SEO, garantissant ainsi une visibilité accrue sur les moteurs de recherche.</p>
                <p>Grâce à une approche méthodique et une veille constante sur les tendances numériques, chaque développement 
                respecte les meilleures pratiques du secteur. Mes réalisations couvrent divers domaines, incluant e-commerce, 
                blogs, plateformes de formation en ligne ou encore applications web et mobile.</p>
                <p>En combinant rigueur et créativité, chaque projet se démarque par une structure optimisée, un design soigné 
                et une navigation fluide. À travers ce portfolio, découvrez mon parcours de développeur freelance marqué par des réalisations 
                techniques abouties et une recherche constante d’innovation dans le domaine digital.</p>
            </div>
        </article>

    </main>

    <footer>
        <div class="container">
            <span>&gt;</span>
            <h4 class="center">M’enrichissant de mes expériences passées, ma présence sera un atout pour votre entreprise</h4>
            <hr>
            <p class="center">J’ai consacré de nombreuses années au commerce en ligne, mon domaine de prédilection, à la création de sites web, au référencement et au développement d’applications mobiles.</p>
            <div id="lien-footer">
            
                <section>
                    <h4>Agence</h4>
                    <nav>
                        <ul>
                            <li><a href="https://crea-troyes.fr/creation-site-web.html">Création de site web</a></li>
                            <li><a href="https://crea-troyes.fr/referencement-web.html">Référencement</a></li>
                            <li><a href="https://crea-troyes.fr/creation-site-e-commerce.html">e-Commerce</a></li>
                            <li><a href="https://crea-troyes.fr/agence-developpement-application-mobile.html">Application mobile</a></li>
                            <li><a href="https://crea-troyes.fr/freelance-informatique.html">Freelance</a></li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <h4>Services</h4>
                    <nav>
                        <ul>
                            <li><a href="https://formation.crea-troyes.fr/">Formation web</a></li>
                            <li><a href="https://blog.crea-troyes.fr">Créa-blog</a></li>
                            <li><a href="https://swift.crea-troyes.fr/">Tutoriel Swift</a></li>
                            <li><a href="https://easyframe.crea-troyes.fr/">Framework PHP EasyFrame</a></li>
                        </ul>
                    </nav>
                </section>

                <section>
                    <h4>Informations</h4>
                    <nav>
                        <ul>
                            <li><a href="mailto:contact@crea-troyes.fr">contact@crea-troyes.fr</a><br></li>
                            <li><a href="tel:+33633925437">06 33 92 54 37</a></li>
                            <li><a href="https://crea-troyes.fr/contact.html">Contact</a></li>
                            <li><a href="https://crea-troyes.fr/cgu.html">Mentions légales</a></li>
                            <li><a href="https://crea-troyes.fr/plan.html">Plan du site</a></li>
                        </ul>
                    </nav>
                </section>

            </div>
            
            <ul>
                <li><a href="https://twitter.com/creatroyes" aria-label="Suivez-nous sur Twitter"><?= $svg_x; ?></a></li>
                <li><a href="https://www.twitch.tv/creatroyes" aria-label="Suivez nos lives sur Twitch"><?= $svg_twitch; ?></a></li>
                <li><a href="https://www.instagram.com/creatroyes/" aria-label="Suivez-nous sur Instagram"><?= $svg_insta; ?></a></li>
                <li><a href="https://github.com/crea-troyes" aria-label="Consultez nos dépots GitHub"><?= $svg_github; ?></a></li>
                <li><a href="https://www.youtube.com/@creatroyes" aria-label="Suivez-nous sur YouTube"><?= $svg_youtube; ?></a></li>
                <li><a href="https://fr.pinterest.com/Creatroyes/" aria-label="Suivez-nous sur Pinterest"><?= $svg_pinterest; ?></a></li>
            </ul>
            <p class="copyright top30 center">Tous droits réservés &copy; <?= date('Y'); ?> - <a href="https://crea-troyes.fr">Créa-troyes</a> by Alban GUILLIER</p>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let images = document.querySelectorAll(".lazy-bg");
            let observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.backgroundImage = `url(${entry.target.dataset.bg})`;
                        observer.unobserve(entry.target);
                    }
                });
            });
            images.forEach(image => {
                observer.observe(image);
            });
        });
    </script>

    <!-- Google tag (gtag.js) -->

</body>
</html>