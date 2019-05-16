<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class Product
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string product name
     *
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $name = '';

    /**
     * @var float product price
     *
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    public $price = '';

    /**
     * @var string product description
     *
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    public $description = '';

    /**
     * @var string product picture
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $picture = '';

    /**
     * @var integer product stock
     *
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    public $stock = 0;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="product_id", cascade={"persist"})
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * Set category.
     *
     * @param Category|null $category
     * @return Product
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category.
     *
     * @return Category|null
     */
    public function getCategory()
    {
        return $this->category;
    }
}