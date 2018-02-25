<?php
namespace TaxesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TaxesBundle\Entity\Articles;


class ArticlesAdminController extends Controller
{
    public function addAction(Request $request){
        //Entity Manager
        $em = $this->getDoctrine()->getManager();
        // Get  new Articles
        $article = new articles();

        //Create article form
        $form = $this->createForm('TaxesBundle\Form\articlesType', $article);

        //if form is valid
        if($form->handleRequest($request)->isValid()){
            //Persit and save article in database
            $em->persist($article);
            $em->flush();

            //Add flash messages
            $this->addFlash('success', 'Article enregistré');

            //Redirect to the homepage
            return $this->redirectToRoute('taxes_homepage');
        }
        //View
        return $this->render('TaxesBundle:admin:add.html.twig', array(
            'form' => $form->createView()
        ));
    }
}