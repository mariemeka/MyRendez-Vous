<?php



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController {

/**
 * @Route("/mespages/CONTACT", name="contact")
 */
  public function PageAcceuil()
  {
    return $this->render('mespages/contact.html.twig');
  }
  /**
 * @Route("/mespages/{slug}", name="specialiste")
 */
public function affiche($slug){
    
    return $this->render('mespages/specialiste.html.twig',
   ['ma' => $slug]);
}

}

?>