<?php

namespace App\Model;

class QuizzManager extends AbstractManager
{
    /**
     *
     */
    const TABLE = 'Quizz';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
