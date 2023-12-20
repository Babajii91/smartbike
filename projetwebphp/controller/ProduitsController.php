<?php
require_once 'models/VeloModel.php';

class ProduitsController
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
        include 'views/produits.php';
        include 'views/footer.php';
    }

    public function details()
    {
        $veloId = isset($_GET['velo']) ? $_GET['velo'] : null;

        if ($veloId) {
            $veloDetails = $this->veloModel->getVeloDetails($veloId);

            $otherVelos = $this->veloModel->getOtherVelos($veloId, 3);

            include 'views/header.php';
            include 'views/velos.php';
            include 'views/footer.php';
        } else {
            echo "Page non trouvée";
        }
    }
}
