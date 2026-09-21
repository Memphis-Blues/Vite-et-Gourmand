<?php

namespace App\Entity;

use App\Repository\HoraireEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireEntityRepository::class)]
class HoraireEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $horaire_id = null;

    #[ORM\Column(length: 50)]
    private ?string $jour = null;

    #[ORM\Column(length: 50)]
    private ?string $heure_ouverture = null;

    #[ORM\Column(length: 50)]
    private ?string $heure_fermeture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHoraireId(): ?int
    {
        return $this->horaire_id;
    }

    public function setHoraireId(int $horaire_id): static
    {
        $this->horaire_id = $horaire_id;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getHeureOuverture(): ?string
    {
        return $this->heure_ouverture;
    }

    public function setHeureOuverture(string $heure_ouverture): static
    {
        $this->heure_ouverture = $heure_ouverture;

        return $this;
    }

    public function getHeureFermeture(): ?string
    {
        return $this->heure_fermeture;
    }

    public function setHeureFermeture(string $heure_fermeture): static
    {
        $this->heure_fermeture = $heure_fermeture;

        return $this;
    }
}
