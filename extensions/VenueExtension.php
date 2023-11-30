<?php

namespace App\Entity;

use App\Entity\Venue;

/**
 * This file acts as an extension to the Venue entity, handling additional functionalities such as the seating arrangement image.
*/
class VenueExtension extends Venue {
    /**
     * Stores the URL for the seating arrangement image.
     *
     * @var string
     */
    private $seatingArrangementImageURL;

    /**
     * Gets the URL for the seating arrangement image.
     *
     * @return string
     */
    public function getSeatingArrangementImageURL() {
        return this->seatingArrangementImageURL;
    }

    /**
     * Sets the URL for the seating arrangement image.
     *
     * @param string $url
     */
    public function setSeatingArrangementImageURL(string $url) {
        this->seatingArrangementImageURL = $url;
    }
}
