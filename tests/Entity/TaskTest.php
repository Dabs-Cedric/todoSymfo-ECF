<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function testTaskCreation() {

        $title = 'Test Task';
        $description = 'Test Description';

        $task = new Task();

        $this->assertINstanceof(Task::class, $task);
        $this->assertEquals($title, $task->getTitle());
        $this->assertEquals($description, $task->getDescription());

    }

    public function testTaskGetterAndSetters() {
        $task = new Task();

        $task->setTitle($title = 'Test Task');
        $task->setDescription($description = 'Test Description');

        $this->assertEquals($task, $title, $description);
        $this->assertEquals('Test Description', $title);
        

    }
}