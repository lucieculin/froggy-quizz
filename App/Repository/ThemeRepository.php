<?php

namespace App\Repository;

use \PDO;

class ThemeRepository extends AbstractRepository
{

    public function findAll():array{
         return $this->pdo
        ->query('SELECT * FROM `themes`')
        ->fetchAll(PDO::FETCH_CLASS, self::class);

    }


}
