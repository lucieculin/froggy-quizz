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

        public function createUser(User $user): void
        {
            $userName = $user->getUserName();
            $firstName= $user->getFirstName();
            $lastName= $user->getLastName();
            $email= $user->getEmail();
            $password= $user->getPassword();

            $query = $this->pdo->prepare(
                'INSERT INTO `users`(`userName`, `name`, `lastname`, `email`,`password`) 
                VALUES ( ?, ?, ?, ?, ?');

            $query = $this->pdo->prepare($query);
            $query->bindValue(1, $userName, PDO::PARAM_INT);
            $query->bindValue(2, $firstName, PDO::PARAM_INT);
            $query->bindValue(3, $lastName, PDO::PARAM_INT);
            $query->bindValue(4, $email, PDO::PARAM_INT);
            $query->bindValue(5, $password, PDO::PARAM_INT);

            $query->execute();
        }


  }