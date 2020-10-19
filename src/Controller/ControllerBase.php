<?php
// src/Controller/ControllerBase.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ControllerBase extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $w = false;
        $hola = ($w)?'Hola, ':'<a href="/login">Login</a>';
        function bratan($a){echo $a;}
        return $this->render('bratan.html.twig',[
            'w1234'=>bratan($hola),
        ]);
    }

    
}
?>