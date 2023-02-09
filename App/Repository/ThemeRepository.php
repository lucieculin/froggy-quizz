<?php

namespace App\Repository;

use http\Params;
use \PDO;
use App\Class\Theme;


class ThemeRepository extends AbstractRepository
{

    public function findAll():array{
         return $this->pdo
        ->query('SELECT * FROM `themes`')
        ->fetchAll(PDO::FETCH_CLASS, Theme::class);

    }

    public function findAllLimit():array{
        return $this->pdo
            ->query('SELECT * FROM `themes` LIMIT 10')
            ->fetchAll(PDO::FETCH_CLASS, Theme::class);

    }


    public function findById(INT $id){
        $query = $this->pdo
            ->prepare("SELECT * FROM themes WHERE themes.id = ?;");
        $query->bindValue(1, $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject( ThemeRepository::class);
    }
    

    public function findIdByName(string $name){
        $query = $this->pdo
            ->prepare('SELECT themes.id FROM themes WHERE themes.name = ?');
        $query->bindValue(1, $name, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(theme::class);
    }


    public function createTheme(string $name){
        $query = $this->pdo
        ->prepare("INSERT INTO themes (name) VALUE ('$name');");
         $query->execute();

    }

    public function updateTheme(int $id, string $name){
        $query = $this->pdo
            ->prepare("UPDATE themes WHERE id = '$id' SET name = '$name';");
        $query->execute();


    }

    public function deleteTheme(int $id){
        $query = $this->pdo
            ->prepare("DELETE FROM themes WHERE id = '$id';");
        $query->execute();
    }
    

}
