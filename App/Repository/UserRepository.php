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
        public function findByEmail(string $email): ?User
        {
            $query = $this->pdo->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch();
            if($data===false)
            {
                return  null;
            }
            $user = new User();
            $user->setId($data['id']);
            $user->setUserName($data['username']);
            $user->setFirstName($data['firstname']);
            $user->setLastName($data['lastname']);
            $user->setPassword($data['password']);
            $user->setRole($data['role']);
            $user->setCreatedAt(new \DateTime($data["created_at"]));

                return $user;


        }


  }