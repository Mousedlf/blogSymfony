<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/comment')]
class CommentController extends AbstractController
{
    #[Route('/', name: 'app_comment')]
    public function index(): Response
    {
        $comments=$commentRepository->findAll();

        return $this->render('comment/index.html.twig', [
            'comments'=>$comments
        ]);
    }
}
