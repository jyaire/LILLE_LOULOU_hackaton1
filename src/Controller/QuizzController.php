<?php
namespace App\Controller;

use App\Model\QuizzManager;

class QuizzController extends AbstractController
{
    public function show()
    {
        $questionsM = new QuizzManager();
        $questions = $questionsM->selectAll();
        return $this->twig->render('Quizz/show.html.twig', ['questions' => $questions]);
    }
     /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function children()
    {
        return $this->twig->render('/Quizz/children.html.twig');
    } 
}
