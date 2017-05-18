<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  // On modifie viewAction, car elle existe déjà
  public function viewAction($id)
  {
    // On crée la réponse sans lui donner de contenu pour le moment
    $response = new Response();

    // On définit le contenu
    $response->setContent("Ceci est une page d'erreur 404");

    // On définit le code HTTP à « Not Found » (erreur 404)
    $response->setStatusCode(Response::HTTP_NOT_FOUND);

    // On retourne la réponse
    return $response;
  }
}
