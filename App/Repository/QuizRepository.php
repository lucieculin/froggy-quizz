<?php
namespace App\Repository;

use App\Class\Quiz;
use App\Class\Theme;
use \PDO;

class QuizRepository extends AbstractRepository
{
    public function findAll():array{
        return $this->pdo
        ->query('SELECT * FROM `quiz`')
        ->fetchAll(PDO::FETCH_CLASS, Quiz::class);

    }

    public function findAllLimit():array{
        return $this->pdo
            ->query('SELECT quiz.id, quiz.name, quiz.theme_id, themes.name as themeName FROM quiz
                                INNER JOIN themes ON themes.id = quiz.theme_id
                                LIMIT 10')
            ->fetchAll(PDO::FETCH_CLASS, Quiz::class);

    }




    public function findAllById(int $id):array{
        $query = $this->pdo
            ->prepare('SELECT * FROM `quiz` WHERE quiz.theme_id = ?;');
        $query->bindValue(1, $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Quiz::class);
    }



    public function findByTheme(INT $themeId, INT $limit):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `quiz` WHERE quiz.theme_id = ? LIMIT ? ;');
        $query->bindValue(1, $themeId, PDO::PARAM_INT);
        $query->bindValue(2, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, Quiz::class);
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



    public function createQuiz(string $name, int $theme_id){
        $query = $this->pdo
            ->prepare("INSERT INTO quiz (name, theme_id) VALUE ('$name, $theme_id');");
        $query->execute();

    }

    public function updateQuiz(int $id, string $name, int $theme_id){
            $query = $this->pdo
                ->prepare("UPDATE quiz WHERE id = '$id' SET name = '$name' SET name = '$theme_id';");
            $query->execute();


        }

    public function deleteQuiz(int $id)   {
        $query = $this->pdo
            ->prepare("DELETE FROM quiz WHERE id = '$id';");
        $query->execute();
    }
}