<?php
// src/Controller/ControllerTicket.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerTicket extends AbstractController
{
    /**
     * @Route("/ticket", name="ticket")
     */
    public function ticket()
    {
        return $this->render('ticket.html.twig', [
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
