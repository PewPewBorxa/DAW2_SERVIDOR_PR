<?php
// src/Controller/ControllerContact.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerContact extends AbstractController
{
    /**
     * @Route("/contacta", name="contacta")
     */
    public function contact()
    {
        return $this->render('contact.html.twig', []);
    }
}
