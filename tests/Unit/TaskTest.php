<?php

namespace Tests\Unit;

use App\Models\Task;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * TaskTest class
 */
class TaskTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 指定のIDのタスクを一件取得できること
     */
    public function testGetById()
    {
        $fake = factory(Task::class)->create();
        $task = new Task();
        $actual = $task->getById($fake->id);

        $this->assertSame($fake->id, $actual->id);

        $actual = $task->getById(999);
        $this->assertNull($actual);
    }

    /**
     * 指定の値でタスクを一件作成できること
     */
    public function testCreateTask()
    {
        $task = new Task();
        $task->createTask(['name' => 'phpunit完璧に理解する']);
        $actual = Task::first();
 
        $this->assertSame('phpunit完璧に理解する', $actual->name);
    }

    /**
     * 指定のIDでタスクを一件更新できること
     */
    public function testUpdateById()
    {
        $target = factory(Task::class)->create(['name' => 'phpunitちょっと理解する']);
        $task = new Task();
        $task->updateById($target->id, ['name' => 'phpunit完璧に理解する']);
        $actual = Task::find($target->id);

        $this->assertSame('phpunit完璧に理解する', $actual->name);
    }
}
