<?php
class ContactController
{
    public function index()
    {
        include 'views/header.php';
        include 'views/contact.php';
        include 'views/footer.php';
    }

    public function processContact()
    {
        header('Location: ?page=erreur404');
        exit();
    }
}