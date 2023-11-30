<?php

namespace App\Entity;

use App\Entity\Event;

/**
 * This file acts as an extension to the Event entity, handling custom seat numbers functionality.
 */
class EventExtension extends Event {

    /**
     * Stores custom seat numbers.
     *
     * @var array | null
     */
    private $customSeatNumbers;

    /**
     * Gets the custom seat numbers.
     *
     * @return array | null
     */
    public function getCustomSeatNumbers() {
        return this->customSeatNumbers;
    }

    /**
     * Sets the custom seat numbers.
     *
     * @param array | null $numbers
     */
    public function setCustomSeatNumbers($numbers) {
        this->customSeatNumbers = $numbers;
    }
}
