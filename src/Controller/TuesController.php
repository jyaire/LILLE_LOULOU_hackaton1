<?php


namespace App\Controller;



class TuesController extends AbstractController

{ public function photos()
{
    return $this->twig->render('choose/tuesplus.html.twig');
}
}