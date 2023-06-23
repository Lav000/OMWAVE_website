<?php
// Récupérer les valeurs des champs du formulaire
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$message = $_POST['message'];

// Vous pouvez maintenant utiliser ces variables comme bon vous semble
// Par exemple, vous pouvez les enregistrer dans une base de données, les envoyer par e-mail, etc.

// Exemple d'affichage des valeurs pour vérification
echo "Nom : " . $nom . "<br>";
echo "Email : " . $mail . "<br>";
echo "Message : " . $message . "<br>";
?>