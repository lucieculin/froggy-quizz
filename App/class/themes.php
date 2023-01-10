<?php
namespace App;

class themes
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
}