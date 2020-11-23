<?php
// src/Controller/ControllerContact.php
namespace App\Controller;

use App\Entity\Contacto;
use App\Form\ContactoType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ControllerContact extends AbstractController
{
    /**
     * @Route("/contacta", name="contacta")
     */
    public function contact(Request $request)
    {
        $contacto = new Contacto();
        $form = $this->createForm(ContactoType::class, $contacto);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $contacto->setDate(new \DateTime('now'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contacto);
            $entityManager->flush();
        }

        return $this->render('contact.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}
