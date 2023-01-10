<?php  

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
    
    private int $id;
    private string $name;
    private int $themeId;

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
     * Get the value of themeId
     *
     * @return int
     */
    public function getThemeId(): int
    {
        return $this->themeId;
    }

    /**
     * Set the value of themeId
     *
     * @param int $themeId
     *
     * @return self
     */
    public function setThemeId(int $themeId): self
    {
        $this->themeId = $themeId;

        return $this;
    }

    public function findAll():array{
        return $this->pdo
        ->query('SELECT * FROM `quiz`')
        ->fetchAll(PDO::FETCH_CLASS, quizRepository::class);
    }

    public function findByTheme(INT $themeId):array{
        $query = $this->pdo
        ->prepare('SELECT * FROM `quiz` WHERE quiz.theme_id = ?;');
        $query->bindValue(1, $themeId, PDO::PARAM_INT);
        //$query->bindValue(1, $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, QuizRepository::class);
    }
}