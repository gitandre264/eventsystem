<?php

namespace App\Form;

use App\Entity\VenueType;


/**
 * This file acts as an extension to the VenueType form, handling the upload of the seating arrangement image.
 */
class VenueTypeExtension extends VenueType {

    /**
     * Adds a new field in the form for uploading the seating arrangement image.
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    puvlic function buildForm(FormBuilderInterface $builder, array $options) {
        // Add code to handle the new image upload field
    }
}
