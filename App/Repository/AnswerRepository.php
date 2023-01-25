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
        return $query->fetchAll(PDO::FETCH_CLASS, AnswerRepository::class);
    }

    public function getAnswerById($id)
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
            $answer = $this->findById($id);
            echo( json_encode($answer));
        }
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


    public function readAnswer($id){

    }

    public function createAnswer($answer, $check_id ){

    }

    public function updateAnswer($id, $answer, $check_id ){

    }

    public function deleteAnswer($id){

    }
}