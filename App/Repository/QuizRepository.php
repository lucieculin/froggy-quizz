<?php
namespace App\Repository;

use \PDO;

class QuizRepository extends AbstractRepository
{
    public function findAll():array{
        return $this->pdo
            ->query('SELECT * FROM quiz')
            ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function findById(INT $id=1){
        $query = $this->pdo
            ->prepare('SELECT * FROM quiz WHERE quiz.id = ? ;');
        $query->bindValue(1, $id ,PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject(self::class);
    }

    public function findByTheme(INT $themeId =1, INT $limit=0):array{
        $query = $this->pdo
            ->prepare('SELECT * FROM quiz WHERE quiz.theme_id = ? LIMIT ? ;');
        $query->bindValue(1, $themeId, PDO::PARAM_INT);
        $query->bindValue(2, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}


