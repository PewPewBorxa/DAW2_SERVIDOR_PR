<?php
// src/Controller/ControllerTours.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerTours extends AbstractController
{
    /**
     * @Route("/tours", name="tours")
     */
    public function tours()
    {
        return $this->render('tours.html.twig', [
            'rutaAbout' => '/nosotros',
            'rutaAlbum' => '/productos',
            'rutaAlbumD' => '/album_details',
            'rutabase' => '/',
            'rutaBlog' => '/blog',
            'rutaContact' => '/contacta',
            'rutaGallery' => '/gallery',
            'rutaLogin' => '/login',
            'rutaRegister' => '/register',
            'rutaSb' => '/sb',
            'rutaTicket' => '/ticket',
            'rutaTours' => '/tours',
        ]);
    }
}
