<?php
require_once 'models/VeloModel.php';
class AccueilController
{
    private $veloModel;

    public function __construct()
    {
        $this->veloModel = new VeloModel();
    }

    public function index()
    {
        $latestVelo = $this->veloModel->getLatestVelo();

        include 'views/header.php';
        include 'views/accueil.php';
        include 'views/footer.php';
    }
}
