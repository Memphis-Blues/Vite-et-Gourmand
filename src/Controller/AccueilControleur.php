<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\HoraireEntity;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

class AccueilControleur extends AbstractController
{
    #[Route('/')]
    public function accueil(EntityManagerInterface $entityManager): Response
    {
        $horaires = $entityManager->getRepository(HoraireEntity::class)->findAll();
        return $this->render('accueil.html.twig', [
           'creneaux' => $horaires
        ]);
    }

    #[Route('MentionsLegales')]
    public function ml(EntityManagerInterface $entityManager): Response
    {
        $horaires = $entityManager->getRepository(HoraireEntity::class)->findAll();
        return $this->render('MentionsLegales.html.twig', [
            'creneaux' => $horaires
        ]);
    }

    #[Route('CGV')]
    public function cgv(EntityManagerInterface $entityManager): Response
    {
        $horaires = $entityManager->getRepository(HoraireEntity::class)->findAll();
        return $this->render('CGV.html.twig', [
            'creneaux' => $horaires
        ]);
    }
}


