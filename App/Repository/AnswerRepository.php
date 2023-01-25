<?php
namespace App\Repository;


use \PDO;
use App\Class\AnswerQsm;

class AnswerRepository extends AbstractRepository
{
    public function findAll():array{
        return $this->pdo
        ->query('SELECT * FROM `answer`')
        ->fetchAll(PDO::FETCH_CLASS, AnswerQcm::class);
    }

    public function findById(INT $id){
        $query = $this->pdo
        ->prepare('SELECT * FROM `answer`WHERE answer.id = ? ;');
        $query->bindValue(1, $id ,PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(AnswerQcm::class);
    }

    public function findByQuestionId(INT $questionId):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `answer` WHERE AnswerQsm.question_id = ?;');
        $query->bindValue(1, $questionId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, AnswerQcm::class);
    }

    public function getAnswerById($id)
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            $answer = $this->findById($id);
            echo( json_encode($answer));
        }
    }

    public function createAnswer(string $newAnswer, INT $newQuestionId):void{
        $query = $this->pdo
            ->prepare('INSERT INTO answer (answer, question_Id) VALUES ( ? , ?)');
        $query->bindValue(1, $newAnswer);
        $query->bindValue(1, $newQuestionId[1]);
        $query->execute();
    }
}