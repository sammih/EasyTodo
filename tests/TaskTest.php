<?php

use App\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function test_task_contains_activities()
    {
        $task = new Task;

        $result = $task->activities('Go to work, Visit the store, Listen to podcast');

        $expected = ['Go to work', 'Visit the store', 'Listen to podcast'];

        $this->assertSame($result, $expected);
    }
}
