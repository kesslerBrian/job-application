<?php
namespace TaxesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TaxesBundle\Entity\Articles;


class ArticlesPublicController extends Controller
{
    public function indexAction(){
        //Entity Manager
        $em = $this->getDoctrine()->getManager();
        //get Article repository
        $articleRepo = $em->getRepository('TaxesBundle:articles');
        // Get  new Articles
        $articles = $articleRepo->findAll();
        //View
        return $this->render('TaxesBundle:public:index.html.twig', array(
            'articles' => $articles,
        ));
    }
}