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
        $user = $this->getUser();
        if ($user != null) {
            $roles = $user->getRoles();
            $admin = (in_array('ROLE_ADMIN', $roles)) ? true : false;
        } else {
            $admin = false;
        }
        return $this->render('bratan.html.twig', [
            'user' => ($user != null) ? $user->getUsername() : '',
            'admin' => $admin,
        ]);
    }
}
