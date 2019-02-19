<?php

namespace App\Repository;


use \Database\PDODatabase;

abstract class RepositoryAbstract
{
    /**
     * @var PDODatabase
     */
    protected $db;

    /**
     * RepositoryAbstract constructor.
     * @param PDODatabase $db
     */
    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }
}