<?php 

namespace App\Ropsitories;

use App\Interfaces\TodoInterface;
use App\Models\TodoList;

class TodoRepository implements TodoInterface
{
    public function __construct(){
        //
    }

    public function getTodos(){
        return TodoList::all();
    }

    /**
     * Summary of saveTodo
     * @param mixed $Todorequest
     * @return TodoList
     */
    public function saveTodo($Todorequest){ 
        return TodoList::create($Todorequest);
    }
}