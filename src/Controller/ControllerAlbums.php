<?php
// src/Controller/ControllerAlbums.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
/* use Symfony\Component\Routing\Annotation\Route; */
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use symfony\component\HttpFoundation\Request;



class ControllerAlbums extends AbstractController
{
    /**
     * @Route("/productos/{pg}",defaults={"pg"=1}, name="productos")
     */
    public function productos($pg)
    {

        function getAction()
        {
            $uri = $_SERVER['REQUEST_URI'];
            $uri_action = explode('.php', $uri);
            $result_action = explode("/", end($uri_action));
            if (sizeOf($result_action) == 3) array_shift($result_action);
            return $result_action;
        }

        $contenido = [
            [
                'imagen' => '/img/albums/1.jpg',
                'titulo' => 'Sweet But Psycho',
                'genero' => 'Electronic'

            ], [
                'imagen' => '/img/albums/2.jpg',
                'titulo' => 'Charco de arena',
                'genero' => 'Post punk'

            ], [
                'imagen' => '/img/albums/3.jpg',
                'titulo' => 'Bababooie',
                'genero' => 'Unknown'

            ], [
                'imagen' => '/img/albums/4.jpg',
                'titulo' => 'Stigma',
                'genero' => 'Pop'

            ], [
                'imagen' => '/img/albums/5.jpg',
                'titulo' => 'Dero',
                'genero' => '???'

            ], [
                'imagen' => '/img/albums/6.jpg',
                'titulo' => 'Luddydrag',
                'genero' => 'Hard Bass'

            ], [
                'imagen' => '/img/albums/7.jpg',
                'titulo' => 'Kaikai Kitan',
                'genero' => '???'

            ], [
                'imagen' => '/img/albums/8.jpg',
                'titulo' => '夜迷事',
                'genero' => 'Pop'

            ], [
                'imagen' => '/img/albums/9.jpg',
                'titulo' => 'Back to the 90s',
                'genero' => 'Vaporwave'

            ],
        ];
        $img1 = '';
        $img2 = '';
        $img3 = '';
        $t1 = '';
        $t2 = '';
        $t3 = '';
        $g1 = '';
        $g2 = '';
        $g3 = '';
        $c1 = '';
        $c2 = '';
        $c3 = '';
        if($pg<3){
        $next = $pg + 1;
        }else{
            $next = 1;
        }

        switch ($pg) {
            case '2':
                $img1 = $contenido[3]['imagen'];
                $img2 = $contenido[4]['imagen'];
                $img3 = $contenido[5]['imagen'];
                $t1 = $contenido[3]['titulo'];
                $t2 = $contenido[4]['titulo'];
                $t3 = $contenido[5]['titulo'];
                $g1 = $contenido[3]['genero'];
                $g2 = $contenido[4]['genero'];
                $g3 = $contenido[5]['genero'];
                $c1 = '';
                $c2 = 'class=active';
                $c3 = '';
                break;
            case '3':
                $img1 = $contenido[6]['imagen'];
                $img2 = $contenido[7]['imagen'];
                $img3 = $contenido[8]['imagen'];
                $t1 = $contenido[6]['titulo'];
                $t2 = $contenido[7]['titulo'];
                $t3 = $contenido[8]['titulo'];
                $g1 = $contenido[6]['genero'];
                $g2 = $contenido[7]['genero'];
                $g3 = $contenido[8]['genero'];
                $c1 = '';
                $c2 = '';
                $c3 = 'class=active';
                break;
            default:
                $img1 = $contenido[0]['imagen'];
                $img2 = $contenido[1]['imagen'];
                $img3 = $contenido[2]['imagen'];
                $t1 = $contenido[0]['titulo'];
                $t2 = $contenido[1]['titulo'];
                $t3 = $contenido[2]['titulo'];
                $g1 = $contenido[0]['genero'];
                $g2 = $contenido[1]['genero'];
                $g3 = $contenido[2]['genero'];
                $c1 = 'class=active';
                $c2 = '';
                $c3 = '';
                break;
        }
        return $this->render('albums.html.twig', [
            'rutaAbout' => '/nosotros',
            'rutaAlbum' => '/productos',
            'rutaAlbumD' => '/album_details',
            'rutabase' => '/',
            'rutaBlog' => '/blog',
            'rutaContact' => '/contacta',
            'rutaGallery' => '/gallery',
            'rutaLogin' => '/login',
            'rutaRegister' => '/register',
            'rutaSb' => '/sb',
            'rutaTicket' => '/ticket',
            'rutaTours' => '/tours',
            'imagenAlbum1' => $img1,
            'imagenAlbum2' => $img2,
            'imagenAlbum3' => $img3,
            'tituloAlbum1' => $t1,
            'tituloAlbum2' => $t2,
            'tituloAlbum3' => $t3,
            'generoAlbum1' => $g1,
            'generoAlbum2' => $g2,
            'generoAlbum3' => $g3,
            'claseP1' => $c1,
            'claseP2' => $c2,
            'claseP3' => $c3,
            'r1' => '/productos/1',
            'r2' => '/productos/2',
            'r3' => '/productos/3',
            'rn' => '/productos/'.$next,
        ]);
    }
}
