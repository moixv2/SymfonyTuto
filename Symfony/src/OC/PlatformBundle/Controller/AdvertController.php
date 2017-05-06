<?php

/*
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller; // on se place dans le namespace des contrôleurs de notre bundle.
//Suivez juste la structure des répertoires dans lequel se trouve le contrôleur

use Symfony\Component\HttpFoundation\Response; // notre contrôleur va utiliser l'objet Response,
//il faut donc le définir grâce au use.

class AdvertController // le nom de notre contrôleur respecte le nom du fichier pour que l'autoload fonctionne.
{
    public function indexAction() // on définit la méthode indexAction()
    {
        return new Response("Notre propre Hello World !"); // on crée une réponse toute simple.
        // L'argument de l'objet Response est le contenu de la page que vous envoyez au visiteur
    }
}*/



// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
  public function indexAction()
  {
    $content = $this
        ->get('templating')
        ->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'Quentin'));

    return new Response($content);
  }
}
