<?php

namespace App\Repository;

use App\Class\User;
use DateTime;
use PDO;

class UserRepository extends AbstractRepository


{

    // Récupère tous les utilisateurs enregistrés
    public function findAll(): array
    {
        return $this->pdo
            ->query('SELECT * FROM users')
            ->fetchAll(PDO::FETCH_CLASS, User::class);
    }

    // Récupère un utilisateur par son nom d'utilisateur
    public function findByUserName(string $userName): ?User
    {
        $query = $this->pdo->prepare('SELECT * FROM users WHERE userName = :userName');
        $query->bindParam(":userName", $userName, PDO::PARAM_STR_CHAR);
        $query->execute();
        $data = $query->fetch();
        if ($data === false) {
            return null;
        }
        // Crée un nouvel objet utilisateur et renvoie ses données
        $user = new User();
        $user->setId($data['id']);
        $user->setUserName($data['userName']);
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setPassword($data['password']);
        $user->setRole($data['role']);
        $user->setCreatedAt(new DateTime($data['created_at']));

        return $user;
    }

    // Crée un nouvel utilisateur dans la base de données
    public function create($userName, $firstName, $lastName, $email, $password): int
    {

        $query = "INSERT INTO users (userName, firstName, lastName, email, password) VALUES (:userName, :firstName, :lastName, :email, :password);";
        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':username', $userName, PDO::PARAM_STR_CHAR);
        $statement->bindParam(':firstname', $firstName, PDO::PARAM_STR_CHAR);
        $statement->bindParam(':lastname', $lastName, PDO::PARAM_STR_CHAR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR_CHAR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR_CHAR);
        $statement->execute();
        // Renvoie l'ID de l'utilisateur nouvellement créé
        return (int)$this->pdo->lastInsertId();
    }




    public function findByEmail($email)
    {
        $query = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute(['email' => $email]);
        $data = $query->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            $user = new User();
            $user->setId($data['id']);
            $user->setUserName($data['user_name']);
            $user->setFirstName($data['first_name']);
            $user->setLastName($data['last_name']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            return $user;
        }

        return null;
    }
}