<?php
// src/Controller/ControllerLogin.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Session;


class ControllerLogin extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('login.html.twig', [
            'usuario' => $usuario,
        ]);
    }
}
