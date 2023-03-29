<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/{name}", name="index")
     */
    public function home($name): Response
    {
        return $this->render('index.html.twig', ['name' => $name]);
    }
}
