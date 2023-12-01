<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeatingMapController extends AbstractController
{
    /**
     * @Route("/seating-map/create", name="seating_map_create")
     */
    public function create(): Response
    {
        // Logic to display the seating map creator page
    }

    /**
     * @Route("/seating-map/save", name="seating_map_save")
     */
    public function save(): Response
    {
        // Logic to save the seating map
    }
}