<?php
/**
 * Created by PhpStorm.
 * User: T3dki4a
 * Date: 11/11/2018
 * Time: 12:06
 */

namespace App\Repository;


use App\DTOs\GenreDTO;

class GenreRepository extends RepositoryAbstract implements GenreRepositoryInterface
{
    /**
     * @return \Generator|GenreDTO[]
     */
    public function get(): \Generator
    {
        return $this->db->query('
            select id, name
            from genres
        ')->execute()
            ->fetch(GenreDTO::class);
    }

}