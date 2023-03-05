<?php

class Task
{
    private string $description = "";
    private bool $isDone = false;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isDone(): bool
    {
        if ($this->isDone === true) {
            return 1;
        }
        return 0;
    }

    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }
}