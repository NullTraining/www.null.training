<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Nette\Utils\Strings;

/**
 * @see WorkshopFixtures
 *
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopRepository")
 */
class Workshop
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $enTitle;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $enShortIntroduction;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $enDescription;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $enSlug;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $hrTitle;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $hrShortIntroduction;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $hrDescription;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $hrSlug;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEnTitle(): string
    {
        return $this->enTitle;
    }

    public function setEnTitle(string $enTitle)
    {
        $this->enTitle = $enTitle;
        $this->enSlug  = Strings::webalize($enTitle);
    }

    public function getEnShortIntroduction(): string
    {
        return $this->enShortIntroduction;
    }

    public function setEnShortIntroduction(string $enShortIntroduction)
    {
        $this->enShortIntroduction = $enShortIntroduction;
    }

    public function getEnDescription(): string
    {
        return $this->enDescription;
    }

    public function setEnDescription(string $enDescription)
    {
        $this->enDescription = $enDescription;
    }

    public function getHrTitle(): string
    {
        return $this->hrTitle;
    }

    public function setHrTitle(string $hrTitle)
    {
        $this->hrTitle = $hrTitle;
        $this->hrSlug  = Strings::webalize($hrTitle);
    }

    public function getHrShortIntroduction(): string
    {
        return $this->hrShortIntroduction;
    }

    public function setHrShortIntroduction(string $hrShortIntroduction)
    {
        $this->hrShortIntroduction = $hrShortIntroduction;
    }

    public function getHrDescription(): string
    {
        return $this->hrDescription;
    }

    public function setHrDescription(string $hrDescription)
    {
        $this->hrDescription = $hrDescription;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
