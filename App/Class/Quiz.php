<?php
namespace App\Class;

class Quiz
{
    private int $id;

    private string $name;

    private int $theme_id;

    private int $quiz_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getThemeId(): int
    {
        return $this->theme_id;
    }

    /**
     * @param int $theme_id
     */
    public function setThemeId(int $theme_id): void
    {
        $this->theme_id = $theme_id;
    }

    /**
     * @return int
     */
    public function getQuizId(): int
    {
        return $this->quiz_id;
    }

    /**
     * @param int $quiz_id
     */
    public function setQuizId(int $quiz_id): void
    {
        $this->quiz_id = $quiz_id;
    }


}