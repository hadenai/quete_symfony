<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BeautyController extends AbstractController
{
    /**
     * @Route("/beauty", name="beauty")
     */
    public function show() : Response
    {
        return $this->render('beauty/show.html.twig', [
            'controller_name' => 'BeautyController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function index() : Response
{
    return $this->render('beauty/index.html.twig', [

    ]);
}

}
