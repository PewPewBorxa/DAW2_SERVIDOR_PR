<?php
// src/Controller/ControllerContact.php
namespace App\Controller;

use App\Entity\Contacto;
use App\Form\ContactoType;
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
        $contacto = new Contacto();
        $form = $this->createForm(ContactoType::class, $contacto);

        return $this->render('contact.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}
