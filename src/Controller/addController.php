<?php
// src/Controller/addController.php
namespace App\Controller;

use App\Entity\Album;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class addController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $entityManager)
    {
        foreach($this->contenido as $key =>$value){
            
            $album = new Album();
            $album->setTitulo($value['titulo']);
            $album->setImagen($value['imagen']);
            $album->setGenero($value['genero']);
            $entityManager->persist($album);
            $entityManager->flush();
        }
        
        return $this->render('bratan.html.twig');
    }

    private $contenido = [
        [
            'imagen' => '1.jpg',
            'titulo' => 'Sweet But Psycho',
            'genero' => 'Electronic'

        ], [
            'imagen' => '2.jpg',
            'titulo' => 'Charco de arena',
            'genero' => 'Post punk'

        ], [
            'imagen' => '3.jpg',
            'titulo' => 'Bababooie',
            'genero' => 'Unknown'

        ], [
            'imagen' => '4.jpg',
            'titulo' => 'Stigma',
            'genero' => 'Pop'

        ], [
            'imagen' => '5.jpg',
            'titulo' => 'Dero',
            'genero' => '???'

        ], [
            'imagen' => '6.jpg',
            'titulo' => 'Luddydrag',
            'genero' => 'Hard Bass'

        ], [
            'imagen' => '7.jpg',
            'titulo' => 'Kaikai Kitan',
            'genero' => '???'

        ], [
            'imagen' => '8.jpg',
            'titulo' => '夜迷事',
            'genero' => 'Pop'

        ], [
            'imagen' => '9.jpg',
            'titulo' => 'Back to the 90s',
            'genero' => 'Vaporwave'

        ],
    ];
}