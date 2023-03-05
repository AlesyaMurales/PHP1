<?php
require_once 'Task.php';
class TaskProvider
{
    public function addTask(Task $task): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO users (description, isDone) VALUES (:description,
                                                     :isDone)'
        );
        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => $task->isDone()
        ]);
    }

    public function getUndoneList(): array
    {
        $tasks = [];
        $statement = $this->pdo->query('SELECT * FROM tasks WHERE isDone = 0');
        while ($statement && $taskData = $statement->fetch()) {
            $tasks[$taskData['id']] = $taskData['description'];
        }

        return $tasks;
    }
}