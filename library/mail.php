<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Content-Type: application/json");

// Vérifie si la requête est bien en POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "error" => "Méthode non autorisée"]);
    exit;
}

// Fonction pour nettoyer et sécuriser les entrées
function clean_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Récupération et sécurisation des données
$nom = isset($_POST["nom"]) ? clean_input($_POST["nom"]) : "";
$email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) : "";
$telephone = isset($_POST["telephone"]) ? clean_input($_POST["telephone"]) : "";
$entreprise = isset($_POST["entreprise"]) ? clean_input($_POST["entreprise"]) : "";
$message = isset($_POST["message"]) ? clean_input($_POST["message"]) : "";
$honeypot = isset($_POST["honeypot"]) ? $_POST["honeypot"] : ""; // Champ piège pour éviter les bots

// Vérifie le honeypot (doit être vide, sinon c'est un bot)
if (!empty($honeypot)) {
    echo json_encode(["success" => false, "error" => "Détection de spam"]);
    exit;
}

// Vérifie que les champs obligatoires sont bien remplis
if (empty($nom) || empty($email) || empty($telephone) || empty($message)) {
    echo json_encode(["success" => false, "error" => "Tous les champs obligatoires doivent être remplis."]);
    exit;
}

// Vérifie la validité de l'email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["success" => false, "error" => "L'adresse email n'est pas valide."]);
    exit;
}


// Contenu du mail
$mail_body = "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h2 {
            color: #007BFF;
        }
        .info {
            font-weight: bold;
            color: #555;
        }
        .message {
            margin-top: 15px;
            padding: 10px;
            background: #f9f9f9;
            border-left: 4px solid #007BFF;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>📩 Nouveau message reçu depuis le portfolio</h2>
        <p><span class='info'>Nom :</span> $nom</p>
        <p><span class='info'>Email :</span> <a href='mailto:$email'>$email</a></p>
        <p><span class='info'>Téléphone :</span> $telephone</p>
        <p><span class='info'>Entreprise :</span> " . (!empty($entreprise) ? $entreprise : "Non précisé") . "</p>
        <div class='message'>
            <p><span class='info'>Message :</span></p>
            <p>$message</p>
        </div>
    </div>
</body>
</html>";


// Prépare l'email
$to = "contact@votre-mail.fr"; // Adresse de réception
$subject = "Contact du Portfolio";
$headers = "From: contact@votre-mail.fr\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";


// Envoi du mail
if (mail($to, $subject, $mail_body, $headers)) {
    echo json_encode(["success" => true, "message" => "Votre message a bien été envoyé."]);
} else {
    echo json_encode(["success" => false, "error" => "Échec de l'envoi du mail."]);
}
?>

