<?php
namespace App\Repository;

use \PDO;

class AnswerRepository extends AbstractRepository
{
    public function findAll():array{
        return $this->pdo
        ->query('SELECT * FROM `answer`')
        ->fetchAll(PDO::FETCH_CLASS, AnswerRepository::class);
    }

    public function findById(INT $id){
        $query = $this->pdo
        ->prepare('SELECT * FROM `answer`WHERE answer.id = ? ;');
        $query->bindValue(1, $id ,PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(AnswerRepository::class);
    }

    public function findByQuestionId(INT $questionId):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `answer` WHERE Answer.question_id = ?;');
        $query->bindValue(1, $questionId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, answerRepository::class);
    }

    public function createAnswer(string $newAnswer, INT $newQuestionId):array{
        $query = $this->pdo
            ->prepare('INSERT INTO answer (answer, question_Id) VALUES ( ? , ?)');
        $query->bindValue(1, $newAnswer);
        $query->bindValue(1, $newQuestionId[1]);
        $query->execute();
    }
}