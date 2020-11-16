<?php
// src/Controller/ControllerSingleBlog.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerSingleBlog extends AbstractController
{
    /**
     * @Route("/sb", name="sb")
     */
    public function sb()
    {
        return $this->render('single-blog.html.twig', []);
    }
}
