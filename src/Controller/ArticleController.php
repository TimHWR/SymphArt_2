<?php
namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller {
    /**
     * @Route("/", name="article_list")
     * @Method({"GET"})
     */
    public function index() {
        // return new Response('<html><head></head><body>Hallo</body></html>');

        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

    /**
     * @Route("/article/{id}", name="article_show")
     */
    public function show($id) {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        return $this->render('articles/show.html.twig', array('article' => $article));
    }

    /**
     * @Route("/signal", name="signal")
     */
    public function signal() {
        $data = $this->getDoctrine()->getRepository(Article::class)->findAllArticlesWith('Signal');

        return new Response('Hallo Ausgabe:\n'.json_encode($data));
    }

    /**
     * @Route("article/save")
     */
    // public function save() {
    //     $entityManager = $this->getDoctrine()->getManager();

    //     $article = new Article();
    //     $article->setTitle("Article Three");
    //     $article->setBody("This is the body for article three");

    //     $entityManager->persist($article);

    //     $entityManager->flush();

    //     return new Response('Saves an article with the id of '.$article->getId());
    // }
}