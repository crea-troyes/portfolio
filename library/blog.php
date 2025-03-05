<?php

// Requête SQL pour récupérer les 4 derniers articles avec leur catégorie
$sqls = array(
    1 => array("Les 10 erreurs CSS les plus courantes et comment les éviter", "16 février", "https://blog.crea-troyes.fr/?p=4104", "CSS3"),
    2 => array("Format BLOB : Comment stocker une image en base de données ?", "15 février", "https://blog.crea-troyes.fr/?p=4099", "PHP 8"),
    3 => array("InvoicePlane : L'application web de facturation open-source", "14 février", "https://blog.crea-troyes.fr/?p=4088", "PHP 8"),
    4 => array("FreshRSS, l'application open source pour gérer ses flux RSS", "13 février", "https://blog.crea-troyes.fr/?p=4071", "PHP 8") 
);

$blog = "";

// Vérifier si on a des articles
foreach ($sqls as $sql) {
        $blog .= '
            <li class="article">
                <span>'.$sql[1].'</span>
                <h3>'.$sql[0].'</h3>
                <p>'.$sql[3].'</p>
                <a href="'.$sql[2].'">Lire l\'article</a>
            </li>';
}
