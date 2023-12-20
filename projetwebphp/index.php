<?php

require_once 'controller/AccueilController.php';
require_once 'controller/ProduitsController.php';
require_once 'controller/CommanderController.php';
require_once 'controller/ContactController.php';
require_once 'models/VeloModel.php';
require_once 'models/CommandeModel.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'accueil':
        $controller = new AccueilController();
        $controller->index();
        break;
    case 'velos':
        $controller = new ProduitsController();
        $controller->index();
        break;
    case 'produit':
        $controller = new ProduitsController();
        $controller->details();
        break;

    case 'commander':
        $controller = new CommanderController();
        $controller->index();
        break;
    case 'mess_commande':
        $controller = new CommanderController();
        $controller->processCommande();
        break;
    case 'cancel_commande':
        $controller = new CommanderController();
        $controller->cancel();
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->index();
        break;
    case 'process_contact':
        $controller = new ContactController();
        $controller->processContact();
        break;
    case 'erreur404':
        include 'views/header.php';
        include 'views/404.php';
        include 'views/footer.php';
        break;
    default:
        include 'views/header.php';
        include 'views/404.php';
        include 'views/footer.php';
        break;
}
?>