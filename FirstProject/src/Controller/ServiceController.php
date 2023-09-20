<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\HomeController;

class ServiceController extends AbstractController
{

    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    #[Route('/service1/{name}', name: 'ShowService')]   // Qt2 et 3 reponse paramétré
    public function showService1($name)
    {
        return new Response ("Service: " . $name);
    }

    #[Route('/service/{name}', name: 'app_service')]
    public function showService($name): Response    // Qt4
    {
        return $this->render('service/showService.html.twig', [
            'controller_name' => 'ServiceController', 'name' => $name
        ]);

    }

    #[Route('/gotoindex', name: 'app_index')]   // Qt 5
    public function goToIndex(): Response
    {
        $home = new HomeController();
        return $home->index();
    }
}