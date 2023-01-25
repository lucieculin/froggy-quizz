<?php

namespace App\Repository;

use \PDO;
use App\Class\Theme;


class ThemeRepository extends AbstractRepository
{

    public function findAll():array{
         return $this->pdo
        ->query('SELECT * FROM `themes`')
        ->fetchAll(PDO::FETCH_CLASS, Theme::class);

    }
    

}
