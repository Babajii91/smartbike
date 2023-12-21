<?php
$veloId = $_POST['velo'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];

$commandeModel = new CommandeModel();
$commandeModel->addCommande($veloId, $nom, $prenom, $email, $message);
?>

<div id="content-process-commande">
    <h2>Merci</h2>
    <p>Votre message a bien été envoyé. Nous vous répondrons dans les plus brefs délais.</p>
    <a href="?page=velos">Retour à la liste des vélos</a>
</div>