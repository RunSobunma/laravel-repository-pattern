<?php

namespace App\Services;

use App\Interfaces\TodoInterface;

class TodoService
{
    public $todoInterface;
    public function __construct(TodoInterface $todoInterface)
    {
        $this->todoInterface = $todoInterface;
    }

    /**
    * Function: getTodos
    * Description: this will show todo list
    */
    public function getTodos(){
        return $this->todoInterface->getTodos();
    }

    /** 
    * Function: saveTodo
    * Description: this will save todo list
    */
    public function saveTodo($request){
        $todo = $this->mapTodoData($request);
        return $this->todoInterface->saveTodo($todo);
        // return $todo;
    }

    /** 
    * Function: mapTodoData
    * Description: this will map todo form data
    */
    public function mapTodoData($request){
        return [
            'title' => $request->title,
            'description' => $request->description,
        ];
    }
}
