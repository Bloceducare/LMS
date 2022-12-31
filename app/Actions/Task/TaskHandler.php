<?php
namespace App\Actions\Task;

use App\Models\Task;
use Illuminate\Support\Str;

class TaskHandler
{
    public static function createTask($request)
    {
        return Task::create([
            'reference' => Str::ulid(),
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'deadline' => $request->deadline,
            'cohort_id' => $request->cohort_id,
            'track_id' => $request->track_id,
            'group_id' => $request->group_id,
            'user_id' => $request->user_id
        ]);
    }

    public static function assignIndividualTask($request)
    {
        $task = Task::find($request->task_id);
        $task->update(['user_id' => $request->user_id]);

        return $task;
    }

    public static function assignGroupTask($request)
    {
        $task = Task::find($request->task_id);
        $task->update(['group_id' => $request->group_id]);

        return $task;
    }
}