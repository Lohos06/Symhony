<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticlesController extends AbstractController
{   

    #[Route('/articles', name: 'app_articles')]
    public function index(): Response
    {
        $articles = [ 
            '1' =>["titre" => "bobby", "description" => 'miaoumiaouw'],
            '2' =>["titre" => "jason", "description" => 'legoat']];
        

        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
            'articles' => $articles,
        ]);
    }

    #[Route('/articles/{id}', name: 'app_article', defaults: ['id' => '1'])]
    public function byId($id): Response
    {
        $articles = [ 
            '1' =>["titre" => "bobby", "description" => 'miaoumiaouw'],
            '2' =>["titre" => "jason", "description" => 'legoat']];
        

        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
            'article' => $articles[$id],
            'articles' => $articles,
        ]);
    }
}
