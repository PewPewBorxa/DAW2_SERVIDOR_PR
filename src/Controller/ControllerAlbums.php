<?php
// src/Controller/ControllerAlbums.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerAlbums extends AbstractController
{
    /**
     * @Route("/albums", name="albums")
     */
    public function albums()
    {
        return $this->render('albums.html.twig',[]);
    }
}
?>