<?php

namespace App\Controller;

use App\Entity\Locations;
use App\Form\LocationType;
use App\Repository\LocationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/new", name="new")
     */
    public function createLocation(EntityManagerInterface $entityManager, Request $request): Response
    {
        $location = new Locations();
        //kono form rikai surukoto !
        $form = $this->createForm(LocationType::class, $location);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){//We restrict the (column)chaine such as integer, 255 letters etc.. here
            $entityManager->persist($location);//When the user enter is correct, persist it
            $entityManager->flush();
            //$this->addFlash() gives message when it's uploaded !
            $this->addFlash('success', 'Your location is uploaded !');
            return $this->redirectToRoute("main");
        }
        return $this->render('admin/dashboard.html.twig', [
            'form' => $form->createView(),//Created variable name form which contains inserts
        ]);
    }
}
