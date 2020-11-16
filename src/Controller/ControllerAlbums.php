<?php
// src/Controller/ControllerAlbums.php
namespace App\Controller;

use App\Entity\Album;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use symfony\component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityManagerInterface;



class ControllerAlbums extends AbstractController
{
    /**
     * @Route("/productos/{gen?all}/{pg?1}", name="productos")
     */
    public function productos($gen, $pg, EntityManagerInterface $entityManager)
    {
        $auxi = [];
        $g = $this->getDoctrine()->getRepository(Album::class)->findAll();
        foreach ($g as $genre) {
            $aux = $genre->getGenero();
            if (!in_array($aux, $auxi)) {
                array_push($auxi, $aux);
            }
        }
        if ($gen != 'all') {
            $albums = $this->getDoctrine()->getRepository(Album::class)->findBy(['genero' => $gen]);
        } else {
            $albums = $this->getDoctrine()->getRepository(Album::class)->findAll();
        }
        return $this->render('albums.html.twig', [
            'contenido' => $albums,
            'items' => 3,
            'genres' => $auxi,
        ]);
    }
}
