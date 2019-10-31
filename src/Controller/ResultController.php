<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\ResultManager;

class ResultController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $resultManager = new ResultManager();
        $results = $resultManager->selectOneMonster();

        return $this->twig->render('Result/index.html.twig', ['result' => $results]);
    }
}
