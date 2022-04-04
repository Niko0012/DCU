<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity=ProchainesSorties::class, inversedBy="commentaires")
     */
    private $prochainesSorties;

    /**
     * @ORM\ManyToOne(targetEntity=News::class, inversedBy="commentaires")
     */
    private $news;

    /**
     * @ORM\ManyToOne(targetEntity=InfoInutile::class, inversedBy="commentaires")
     */
    private $infoInutile;

    /**
     * @ORM\ManyToOne(targetEntity=Podcast::class, inversedBy="commentaires")
     */
    private $podcast;

    /**
     * @ORM\ManyToOne(targetEntity=MakingOf::class, inversedBy="commentaires")
     */
    private $makingOf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getProchainesSorties(): ?ProchainesSorties
    {
        return $this->prochainesSorties;
    }

    public function setProchainesSorties(?ProchainesSorties $prochainesSorties): self
    {
        $this->prochainesSorties = $prochainesSorties;

        return $this;
    }

    public function getNews(): ?News
    {
        return $this->news;
    }

    public function setNews(?News $news): self
    {
        $this->news = $news;

        return $this;
    }

    public function getInfoInutile(): ?InfoInutile
    {
        return $this->infoInutile;
    }

    public function setInfoInutile(?InfoInutile $infoInutile): self
    {
        $this->infoInutile = $infoInutile;

        return $this;
    }

    public function getPodcast(): ?Podcast
    {
        return $this->podcast;
    }

    public function setPodcast(?Podcast $podcast): self
    {
        $this->podcast = $podcast;

        return $this;
    }

    public function getMakingOf(): ?MakingOf
    {
        return $this->makingOf;
    }

    public function setMakingOf(?MakingOf $makingOf): self
    {
        $this->makingOf = $makingOf;

        return $this;
    }
}
