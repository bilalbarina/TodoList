<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = [];
        $categories = Task::pluck('category_name')->unique();
        foreach ($categories as $category) {
            $tasks[$category] = Task::where('category_name', $category)->get();
        }
        $currentDate = Carbon::now()->format('Y-m-d');

        return view('index', compact('categories', 'tasks', 'currentDate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:25'],
            'description' => ['nullable', 'string'],
            'category_name' => ['required', 'string'],
            'due_date' => ['required', 'date'],
        ]);

        Task::create(
            array_merge(
                $request->only(['title', 'description', 'due_date']),
                ['category_name' => strtolower($request->get('category_name'))]
            )
        );

        return back()
            ->withInput(['success' => 'Task added successfully.']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:25'],
            'description' => ['nullable', 'string'],
            'category_name' => ['required', 'string'],
            'due_date' => ['required', 'date'],
        ]);

        $task->update(
            array_merge(
                $request->only(['title', 'description', 'due_date']),
                ['category_name' => strtolower($request->get('category_name'))]
            )
        );

        return back()
            ->withInput(['success' => 'Task updated successfully.']);
    }

    /**
     * Delete item from database
     */

    protected function delete(Task $task)
    {
        $task->delete();
        return back()
            ->withInput(['success' => 'Task deleted successfully.']); 
    }
}
