<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 03/11/2018
 * Time: 21:52
 */

namespace Database;


class PDOResultSet implements ResultSetInterface
{
    /**
     * @var PDOPreparedStatement
     */
    private $statement;
    /**
     * PDOResultSet constructor.
     * @param bool|PDOPreparedStatement|\PDOStatement $preparedStatement
     */
    public function __construct($preparedStatement)
    {
        $this->statement = $preparedStatement;
    }

    public function fetch($className): \Generator
    {
        while ($row = $this->statement->fetchObject($className)) {
            yield $row;
        }
    }
}