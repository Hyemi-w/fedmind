<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HealthDirectoryController extends AbstractController
{
    /**
     * @Route("/annuaire-sante", name="health_directory")
     */
    public function index()
    {
        return $this->render('health_directory/index.html.twig', [
            'controller_name' => 'HealthDirectoryController',
        ]);
    }
}
