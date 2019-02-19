<?php

namespace Database;

class PDOPreparedStatement implements PreparedStatementInterface
{
    /**
     * @var PDOPreparedStatement
     */
    private $preparedStatement;
    /**
     * PDOPreparedStatement constructor.
     * @param bool|\PDOStatement $stmt
     */
    public function __construct($stmt)
    {
        $this->preparedStatement = $stmt;
    }

    public function execute(array $params = []): ResultSetInterface
    {
        $this->preparedStatement->execute($params);
        return new PDOResultSet($this->preparedStatement);
    }
}