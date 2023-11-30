<?php

namespace App\Form;

use App\Entity\EventType;


/**
 * This file acts as an extension to the EventType form, handling the input of custom seat numbers.
 */
class EventTypeExtension extends EventType {

    /**
     * Adds a new field in the form for inputting custom seat numbers.
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        // Add code to handle the new custom seat number input field
    }
}
