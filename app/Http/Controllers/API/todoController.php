<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoFormRequest;
use App\Interfaces\TodoInterface;
use App\Models\TodoList;
use App\Services\TodoService;
use Illuminate\Http\Request;

class todoController extends Controller
{

    public $todoService;
    public function __construct(TodoService $todoService){
        $this->todoService = $todoService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = $this->todoService->getTodos();
        return response()->json($todos);
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(TodoFormRequest $request)
{

    #save todo Function
    $todo = $this->todoService->saveTodo($request);


    return response()->json([
        'success' => true,
        'message' => 'Todo created successfully',
        'data' => $todo,
    ], 201); // 201 = Created
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
