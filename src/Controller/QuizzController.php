<?php

namespace App\Controller;

use App\Model\QuizzManager;

class QuizzController extends AbstractController
{
    public function horreur()
    {
        $questions = new QuizzManager();
        $questions = $questions->selectAll();
        return $this->twig->render('Quizz/show.html.twig', ['questions' => $questions]);
    }
}
