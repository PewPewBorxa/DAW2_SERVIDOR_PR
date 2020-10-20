<?php
// src/Controller/ControllerAbout.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerAbout extends AbstractController
{
    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function about()
    {
        return $this->render('about.html.twig', [
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
