<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController {

/**
 * @Route("/", name="acceuil")
 */
  public function PageAcceuil()
  {
    return $this->render('mespages/acceuil.html.twig');
  }
  /**
 * @Route("/mespages/{slug}", name="contact")
 */
public function affiche($slug){
    
    return $this->render('mespages/contact.html.twig',
   ['ma' => $slug]);
}

}

?>