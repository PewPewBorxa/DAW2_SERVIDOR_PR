<?php
// src/Controller/ControllerGallery.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerGallery extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery()
    {
        return $this->render('gallery.html.twig', []);
    }
}
