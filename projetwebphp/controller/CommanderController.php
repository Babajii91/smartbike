<?php

class CommanderController
{
    private $veloModel;

    public function __construct()
    {
        $this->veloModel = new VeloModel();
    }

    public function index()
    {
        $allVelos = $this->veloModel->getAllVelos();

        include 'views/header.php';
        include 'views/commander.php';
        include 'views/footer.php';
    }

    public function processCommande()
    {

        include 'views/header.php';
        include 'views/mess_commande.php';
        include 'views/footer.php';
    }

    public function cancel()
    {
        header('Location: ?page=velos');
        exit();
    }
}