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
    

    public function getDatabase()
    {
        try{
        $pdo = new PDO();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

        } catch (\PDOException $exception){
            print "Erreur !:".$exception->getMessage(). "<br/>";
            die();
        }
    }

    public function readTheme($id){

    }

    public function createTheme($name){

    }

    public function updateTheme($id, $name){

    }

    public function deleteTheme($id){

    }
    

}
