<?php

namespace Jessedev\FilamentKanban\Tests\Pages;

use Filament\Forms;
use Jessedev\FilamentKanban\Pages\KanbanBoard;
use Jessedev\FilamentKanban\Tests\Enums\TaskStatus;
use Jessedev\FilamentKanban\Tests\Models\Task;
use Jessedev\FilamentKanban\Tests\Models\User;

class TestBoard extends KanbanBoard
{
    protected static string $model = Task::class;

    protected static string $statusEnum = TaskStatus::class;

    protected function getEditModalFormSchema(null | int | string $recordId): array
    {
        return [
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\Select::make('team')
                ->relationship('team', 'name')
                ->multiple()
                ->options(User::pluck('name', 'id')),
        ];
    }
}
