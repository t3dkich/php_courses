<?php


namespace Database;


interface DatabaseInterface
{
    public function query( $query) : PreparedStatementInterface;
}