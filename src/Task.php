<?php

namespace App;

class Task
{
    public function activities(string $tasks): array
    {
        return explode(', ', $tasks);
    }
}
