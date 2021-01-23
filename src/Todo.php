<?php

namespace App;

class Todo
{
    public function tasks(string $tasks): array
    {
        return explode(', ', $tasks);
    }
}
