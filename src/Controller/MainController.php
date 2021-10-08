<?php

namespace App\Controller;

use mysql_xdevapi\RowResult;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     *  Contrôleur de la page d'acceuil
     *
     * @Route("/", name="main_home")
     */
    public function home(): Response
    {
        return $this->render( 'main/home.html.twig');
    }
}