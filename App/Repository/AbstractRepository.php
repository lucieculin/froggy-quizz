<?php

namespace App\Repository;

use \PDO;

class AbstractRepository
{

    protected PDO $pdo;

    private string $url = 'mysql:host=127.0.0.1:3306;dbname=froggy_quiz';
    private string $user = 'root';
    private string $pwd = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->url, $this->user, $this->pwd);
    }
}