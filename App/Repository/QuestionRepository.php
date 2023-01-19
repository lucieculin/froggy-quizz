<?php
namespace App\Repository;
use \PDO;

class QuestionRepository extends AbstractRepository
{
    public function findAll():array
    {
        return $this->pdo
            ->query('SELECT * FROM `questions`')
            ->fetchAll(PDO::FETCH_CLASS, QuestionRepository::class);
    }

    public function findById(INT $id){
        $query = $this->pdo
        ->prepare('SELECT * FROM `questions`WHERE questions.id = ? ;');
        $query->bindValue(1, $id ,PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(QuestionRepository::class);
    }

    public function findByTheme(INT $themeId, INT $limit):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `questions` WHERE questions.theme_id = ? LIMIT ? ;');
        $query->bindValue(1, $themeId, PDO::PARAM_INT);
        $query->bindValue(2, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, QuestionRepository::class);
    }
    public function findByQuizId(INT $quizId):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `questions` WHERE questions.quiz_id = ?;');
        $query->bindValue(1, $quizId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, QuestionRepository::class);
    }
}