<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MethodController extends AbstractController
{
    /**
     * @Route("/method", name="method")
     */
    public function index()
    {
        return $this->render('method/index.html.twig', [
            'controller_name' => 'MethodController',
        ]);
    }
}
