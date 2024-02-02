<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AproposController extends AbstractController
{
    #[Route('/acceuil', name: '_acceuil')]
    public function delete(): Response
    {   
        return $this->render('acceuil/index.html.twig');
    }
}