<?php

namespace App\Repository;
  use \PDO;
  use App\Class\User;

  class UserRepository extends AbstractRepository
  {
      public function findAll(): array
      {
          return $this->pdo
              ->query('SELECT * FROM users')
              ->fetchAll(PDO::FETCH_CLASS, User::class);

      }
  }