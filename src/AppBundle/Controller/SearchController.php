<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    public function farmersAction(Request $request)
    {

        return $this->render('@App/search/farmers.html.twig', array());
    }
}
