<?php
// src/Controller/ControllerMain.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerMain extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function main()
    {
        return $this->render('main.html.twig',[]);
    }
}
?>