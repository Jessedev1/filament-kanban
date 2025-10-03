<?php

namespace Jessedev\FilamentKanban\Tests\Pages;

use Jessedev\FilamentKanban\Pages\KanbanBoard;
use Jessedev\FilamentKanban\Tests\Enums\TaskStatus;
use Jessedev\FilamentKanban\Tests\Models\UlidTask;

class TestBoardWithUlidTask extends KanbanBoard
{
    protected static string $model = UlidTask::class;

    protected static string $statusEnum = TaskStatus::class;
}
