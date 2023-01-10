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
    
    private int $id;

private string $name;




    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

/**
 * Get the value of name
 *
 * @return string
 */
public function getName(): string
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
$this->name = $name;

return $this;
}

public function findAll():array{
    return $this->pdo
    ->query('SELECT * FROM `themes`')
    ->fetchAll(PDO::FETCH_CLASS, ThemeRepository::class);
}
}
?>