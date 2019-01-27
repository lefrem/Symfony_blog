<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArticleType;

class ArticleController extends AbstractController
{
    /**
     * @Route("/New_Article", name="New_Article")
     * @Route("/Edit_Article/{id}", name="Edit_Article")
     */
    public function index(Request $request, Article $article = null)
    {
        if(!$article){
            $article = new article();
        }
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
            if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $article->setcreatedAt(new \DateTime());
            $article->setuser($this->getUser());
            $entityManager->persist($article);
            $entityManager->flush();
           // $this->redirectToRoute(‘register_sucess’);
           return $this->redirectToRoute('Article', ['id' => $article->getId()]);
           //return $this->redirectToRoute('list_article');
        }

    
        return $this->render('article/index.html.twig', array(
            'form' => $form->createView(),
            ));           
    }

    /**
     * @Route("/Article/{id}", name="Article")
     */
    public function article($id)
    {
        $myArticle = $this->getDoctrine()->getRepository(Article::class);
        $articles=$myArticle->find($id);
        return $this->render('article/article.html.twig', [
            'article' => $articles
        ]);
    }

    /**
     * @Route("/", name="list_article")
     */
    public function listArticle(Request $request)
    {
        $myArticle = $this->getDoctrine()->getRepository(Article::class)->findBy(array('published'=>1));
        $articles=$myArticle;
     
        return $this->render('article/list_article.html.twig', [
            'controller_name' => 'BlogController',
            'article' => $articles
        ]);
    }

    /**
     * @Route("/User_Article/{id}", name="User_Article")
     */
    public function userArticle($id)
    {
        dump($id);
        $myArticle = $this->getDoctrine()->getRepository(Article::class)->findBy(array('user'=>$id));
        $articles=$myArticle;

        dump($articles);
        return $this->render('article/user_article.html.twig', [
            'controller_name' => 'BlogController',
            'article' => $articles
        ]);
    }

    /**
     * @Route("/Remove_Article/{id}", name="Remove_Article")
     */
    public function removeArticle(Request $request, Article $article=NULL)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($article);
        $entityManager->remove($article);
        $entityManager->flush();
        

        return $this->render('article/remove_article.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    



}