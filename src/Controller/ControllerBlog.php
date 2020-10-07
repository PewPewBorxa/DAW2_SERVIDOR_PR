<?php
// src/Controller/ControllerBlog.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerBlog extends AbstractController
{
    /**
     * @Route("/blog", name="blogg")
     */
    public function blog()
    {
        return $this->render('blog.html.twig',[]);
    }
}
?>