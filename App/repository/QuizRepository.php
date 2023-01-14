<?php
#[AllowDynamicProperties]
class QuizRepository
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
        ->query('SELECT * FROM `quiz`')
        ->fetchAll(PDO::FETCH_CLASS, QuizRepository::class);
    }

    public function findById(INT $id){
        $query = $this->pdo
        ->prepare('SELECT * FROM `quiz`WHERE quiz.id = ? ;');
        $query->bindValue(1, $id ,PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(QuizRepository::class);
    }

    public function findByTheme(INT $themeId, INT $limit):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `quiz` WHERE quiz.theme_id = ? LIMIT ? ;');
        $query->bindValue(1, $themeId, PDO::PARAM_INT);
        $query->bindValue(2, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, QuizRepository::class);
    }
}