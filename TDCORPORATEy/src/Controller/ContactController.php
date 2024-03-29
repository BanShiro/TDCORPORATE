<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{
    #[Route('/contact', name:'contact')]
    public function contact(): Response
    {   
        return $this->render('contact/index.html.twig',[
        "controller_name" => "ContactController",
        ]);
    }
}