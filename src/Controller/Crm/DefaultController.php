<?php

namespace App\Controller\Crm;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/crm', name: 'app_crm_default')]
    public function index(): Response
    {
        return $this->render('crm/default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
