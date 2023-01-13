<?php



class ThemeRepository
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
    ->query('SELECT * FROM `themes`')
    ->fetchAll(PDO::FETCH_CLASS, ThemeRepository::class);
}



}
?>