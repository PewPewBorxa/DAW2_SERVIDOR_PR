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
        return $this->render('tours.html.twig',[]);
    }
}
?>