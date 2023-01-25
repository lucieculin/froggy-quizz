<?php
namespace App\Class;

class Theme
{

    private int $id;

    private string $name;

    private int $themeId;




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
        return $this->themeId;
    }

    /**
     * @param int $themeId
     */
    public function setThemeId(int $themeId): void
    {
        $this->themeId = $themeId;
    }



}