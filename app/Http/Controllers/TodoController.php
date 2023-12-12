<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    $user_id = auth()->user()->id;
    $todos = Todo::where('user_id', $user_id)->get();

    return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    
    public function store(Request $request)
   {
    $request->validate([
        'title' => 'required|max:50',
        'description' => 'required|max:160',
    ]);

    $user_id = auth()->user()->id; 

    Todo::create([
        'user_id' => $user_id,
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ]);

    return redirect()->route('todos.index')->with('success', 'Todo created successfully!');
}

    
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    
    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|max:50',
            'description' => 'required|max:160',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index')->with('success', 'Todo updated successfully!');
    }

    
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully!');
    }
}


