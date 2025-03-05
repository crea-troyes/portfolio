<?php

// Initialisation des variables
$compétence = $service = $projet = "";

// Les compétences 
$competences = [
    "HTML & CSS" => 99,
    "JS, PHP & MySQL" => 99,
    "CMS & Wordpress" => 98,
    "SEO & Google Ads" => 98,
    "Application mobile" => 95,
    "CodeIgniter" => 90  
];

foreach($competences as $competence => $valeur) {
    $compétence .= "<div class='card'>";
    $compétence .= "    <h3>$competence</h3>";
    $compétence .= "    <div role='progressbar' aria-label='$competence' aria-valuenow='$valeur' aria-valuemin='0' aria-valuemax='100' style='--value: $valeur'></div>";
    $compétence .= "</div>";
}


// Les services
$services = [
    "Création site web" => array("Création de sites web sur mesure, adaptés à vos besoins et à votre budget.", $svg_web),
    "Boutique en ligne" => array("Je développe des sites e-commerce afin de vendre vos produits en ligne.", $svg_cart),
    "Référencement" => array("Mise en place de stratégies afin d'améliorer la visibilité.", $svg_seo),
    "Application mobile" => array("Je développe et propulse des applications mobiles iOS.", $svg_app),
    "Campagne Ads" => array("Gestion des campagnes Google Ads et augmentation des conversions.", $svg_google),
    "Formation" => array("Je propose des formations en ligne et vous apprends à développer.", $svg_formation),
    "Conseil" => array("Je vous accompagne dans la mise en place d'une stratégie digitale.", $svg_conseil)
];

foreach($services as $item => $description) {
    $service .= "<div class='service'>";
    $service .= "   <span class='icon'>$description[1]</span>";
    $service .= "   <h3>$item</h3>";
    $service .= "   <p>$description[0]</p>";
    $service .= "</div>";
}


// Les projets
$projets = array(
    1 => array("affnox.webp", "Affnox", "Wordpress", "Affnox, solution matage-harpage", "logo-affnox.webp"),
    2 => array("crea-blog.webp", "Créa-blog", "Wordpress", "Créa-blog, l'info des développeurs", "logo-crea-blog.webp"),
    3 => array("app-aac.webp", "App'AAC", "Sur-mesure", "App'AAC, conduite accompagnée", "logo-app-aac.webp"),
);

foreach($projets as $p) {
    $projet .= '
        <div class="grid-photo top80">
            <div class="image-wrapper">
                <img loading="lazy" src="img/'.$p[0].'" alt="'.$p[1].'">
                <div class="image-text">
                    <p>'.$p[2].'</p>
                    <a href="#">'.$p[1].'</a>
                </div>
            </div>
            <span>'.$p[3].'</span>
            <img loading="lazy" class="logo" src="img/'.$p[4].'" alt="'.$p[1].'">
        </div>';
}