<?php
// src/Controller/ControllerAlbumsDetails.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerAlbumsDetails extends AbstractController
{
    /**
     * @Route("/album_details", name="album_details")
     */
    public function albums_details()
    {
        return $this->render('albums-details.html.twig', []);
    }
}
