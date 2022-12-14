<?php  

class AnswerRepository
{
    
    private PDO $pdo;

    private string $url = 'mysql:host=127.0.0.1:3306;dbname=froggy_quiz';
    private string $user = 'root';
    private string $pwd = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->user, $this->pwd);
    }
    



    public function findAll():array{
        return $this->pdo
        ->query('SELECT * FROM `answer`')
        ->fetchAll(PDO::FETCH_CLASS, answerRepository::class);
    }

    public function findById(INT $id){
        $query = $this->pdo
        ->prepare('SELECT * FROM `answer`WHERE answer.id = ? ;');
        $query->bindValue(1, $id ,PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(answerRepository::class);
    }

    public function findByQuestionId(INT $questionId):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `answer` WHERE answer.question_id = ?;');
        $query->bindValue(1, $questionId, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, answerRepository::class);
    }
}