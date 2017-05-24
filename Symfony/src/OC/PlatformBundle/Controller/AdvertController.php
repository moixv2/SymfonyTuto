<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//

class AdvertController extends Controller{

  public function menuAction()
  {
    $listeAdverts = array(
      array('id' => 2, 'title' => 'Recherche dev Symfony'),
      array('id' => 5, 'title' => 'mission webmaster'),
      array('id' => 9, 'title' => 'offre de stage webdesigner')

    );

    return $this -> render('OCPlatformBundle:Advert:menu.htlm.twig', array(
      'listeAdverts' => $listeAdverts
    ));
  }
}
