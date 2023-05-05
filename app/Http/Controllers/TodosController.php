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
        $todos = Todo::paginate();

        return view(
            'index',
            [
                'todo' => $todos,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        Todo::create([
            'title' => 'Новая задача',
            'description' => 'Описание задачи ...',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view(
            'item',
            [
                'item' => $todo
            ]
        );
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
