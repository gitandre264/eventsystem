<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\as ORM;

class Venue extends BaseEntity
{
    /**
     * @AORM\Column(type="boolean")
     */
    private $hasAllocatedSeating = false;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $seatingMapJson;\n\n    // Add getters and setters for these properties
}