<?php
// src/Controller/ControllerBlog.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerBlog extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('blog.html.twig', [
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
