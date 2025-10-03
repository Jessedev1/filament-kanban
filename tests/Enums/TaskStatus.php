<?php

namespace Jessedev\FilamentKanban\Tests\Enums;

use Jessedev\FilamentKanban\Concerns\IsKanbanStatus;

enum TaskStatus: string
{
    use IsKanbanStatus;

    case Todo = 'Todo';
    case Doing = 'Doing';
    case Done = 'Done';
}
