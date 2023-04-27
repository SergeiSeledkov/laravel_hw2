<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $uri = $request->path();
        if ($uri === '/') {
            return view('todo.index', ['appName' => 'Todo app']);
        }
        if ($uri === 'todo') {
            $list = Todo::all();
            if (count($list) === 0) {
                return redirect()->route('todo.index');
            }

            return view('todo.list', ['list' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $uri = $request->path();
        if ($uri === 'todo/create' && count(Todo::all()) === 0) {
            Todo::create([
                'title' => 'task 1',
                'description' => 'task 1',
            ]);
            Todo::create([
                'title' => 'task 2',
                'description' => 'task 2',
            ]);
            Todo::create([
                'title' => 'task 3',
                'description' => 'task 3',
            ]);
        }
        return redirect()->route('todo.list');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if ($id) {
            $item = Todo::find($id);
            if ($item) {
                return view('todo.item', ['item' => $item]);
            }
        }
        return redirect()->route('todo.list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todos)
    {
        //
    }
}
