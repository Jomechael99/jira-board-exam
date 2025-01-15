<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::with(['status'])->get();
        return TaskResource::collection($task);
    }

    public function store(TaskRequest $taskRequest)
    {
        $data = $taskRequest->validated();

        return new TaskResource(Task::create($data));
    }

    public function show($uuid)
    {
        $task = Task::where('uuid', $uuid)->firstOrFail();
        return new TaskResource($task);
    }

    public function update(TaskRequest $taskRequest, $uuid)
    {
        $data = $taskRequest->validated();

        $task = Task::where('uuid', $uuid)->firstOrFail();
        $task->status_id = $data['status_id'];
        $task->save();

        return new TaskResource($task);
    }

    public function destroy($uuid)
    {
        $task = Task::where('uuid', $uuid)->firstOrFail();
        $task->delete();

        return response()->json();
    }
}
