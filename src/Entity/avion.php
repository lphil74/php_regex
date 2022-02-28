<?php
namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
// une modification depuis PHPstorm
/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class avion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $idavioni;
    /**
     * @ORM\Column(type="string")
     */
    private $daterevisiond;

    /**
     * @ORM\Column(type="integer")
     */
    private $anneed;

    /**
     * @ORM\Column(type="integer")
     */
    private $idtypeavioni;

    // getter functions


    public function getId(): ?int
    {
        return $this->idavioni;
    }

    public function getidavioni(): ?int
    {
        return $this->idavioni;
    }
    public function getdaterevisiond(): ?int
    {
        return $this->daterevisiond;
    }
    public function getanneed(): ?int
    {
        return $this->anneed;
    }
    public function getidtypeavioni(): ?int
    {
        return $this->idtypeavioni;
    }
    //setter methods
    public function setdaterevisiond(string $daterevsion): void
    {
       $this->daterevisiond = $daterevsion;
    }
    public function setanneed(int $anneed): void
    {
        $this->anneed = $anneed;
    }
    public function setidtypeavioni(int $idtypeavioni): void
    {
        $this->idtypeavioni = $idtypeavioni;
    }
}