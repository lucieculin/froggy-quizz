<?php

class difficult
{
    private int $id;

    private int $difficult;

    private int $question_id;

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
     * @return int
     */
    public function getDifficult(): int
    {
        return $this->difficult;
    }

    /**
     * @param int $difficult
     */
    public function setDifficult(int $difficult): void
    {
        $this->difficult = $difficult;
    }

    /**
     * @return int
     */
    public function getQuestionId(): int
    {
        return $this->question_id;
    }

    /**
     * @param int $question_id
     */
    public function setQuestionId(int $question_id): void
    {
        $this->question_id = $question_id;
    }


}