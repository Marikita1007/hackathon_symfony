<?php

namespace App\Controller;

use App\Repository\LocationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/main.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/", name="main")
     */
    public function home(LocationsRepository $repository): Response
    {
        $location = $repository->findAll();
        return $this->render('main/main.html.twig', [
            'locations' => $location,
        ]);
    }

    /**
     * @Route("/detail/{id}", name="detail")
     */
    public function detail(LocationsRepository $repository, $id): Response
    {
        $locationDetail = $repository->find($id);
        return $this->render('main/detail.html.twig', [
            'location' => $locationDetail,
        ]);
    }

}
