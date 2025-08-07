<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(Request $request)
    {
        $tasks = Task::where('user_id', $request->user()->id)->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Tasks retrieved successfully',
            'count' => $tasks->count(),
            'tasks' => TaskResource::collection($tasks),
        ]);
    }

    public function show($id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->first();
        if (!$task) {
            return response()->json([
                'status' => 'error',
                'message' => 'Task not found or unauthorized',
            ], 404);
        }


        $this->authorizeTask($task);

        return response()->json([
            'status' => 'success',
            'message' => 'Task retrieved successfully',
            'task' => new TaskResource($task),
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        $task = $request->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed ?? false,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Task created successfully',
            'task' => new TaskResource($task),
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'status' => 'error',
                'message' => 'Task not found',
            ], 404);
        }

        $this->authorizeTask($task); // Authorize the task belongs to user

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'boolean',
        ]);

        $task->update($request->only(['title', 'description', 'completed']));

        return response()->json([
            'status' => 'success',
            'message' => 'Task updated successfully',
            'task' => new TaskResource($task),
        ]);
    }


    public function destroy($id)
    {
        $task = Task::find($id); // Find the task by ID
        if (!$task) {
            return response()->json([
                'status' => 'error',
                'message' => 'Task not found',
            ], 404);
        }
        $this->authorizeTask($task);
        $task->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Task deleted successfully',
        ]);
    }

    private function authorizeTask(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
