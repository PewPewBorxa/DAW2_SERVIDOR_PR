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
        return $this->render('about.html.twig', []);
    }
}
