<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Task class
 */
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * 指定のIDでタスクを一件取得
     *
     * @param int $id
     * @return Task|null
     */
    public function getById($id)
    {
        return $this->find($id);
    }

    /**
     * 指定のタスクを一件作成
     *
     * @param array $attributes
     * @return void
     */
    public function createTask($attributes)
    {
        $this->create($attributes);
    }

    /**
     * 指定のIDでタスクを一件更新
     *
     * @param int $id
     * @param array $attributes
     * @return void
     * @throws ModelNotFoundException
     */
    public function updateById($id, $attributes)
    {
        $task = $this->findOrFail($id);
        $task->fill($attributes);
        $task->save();
    }
}
