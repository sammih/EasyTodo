<?php

use App\Todo;
use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    public function test_todo_contains_tasks()
    {
        $tasks = new Todo;

        $result = $tasks->tasks('Go to work, Visit the store, Listen to podcast');

        $expected = ['Go to work', 'Visit the store', 'Listen to podcast'];

        $this->assertSame($result, $expected);
    }
}
