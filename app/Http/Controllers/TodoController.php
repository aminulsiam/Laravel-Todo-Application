<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{

    public function index()
    {
        $todoList = Todo::where('user_id',Auth::id())->paginate(7);
        return view('todo.todolist',compact('todoList'));
    }

    // create todo form
    public function create()
    {
        return view('todo.create');
    }

    //store Todo
    public function storeTodo(Request $request){

    	$this->validate($request,['name'=>'required']);
    	Todo::create([
    		'name'    => $request->get('name'),
    		'user_id' => Auth::user()->id,
    	]);
    	
    	return redirect('/todo')
            ->with('flash_notification.message', 'New todo created successfully')
            ->with('flash_notification.level', 'success');

    }

    // Update todo
    public function updateTodo($id){
    	$todo = Todo::findOrFail($id);
        $todo->complete = !$todo->complete;
        $todo->save();

        return redirect()
            ->route('todo.index')
            ->with('flash_notification.message', 'Todo updated successfully')
            ->with('flash_notification.level', 'success');
    }

    // delete Todo
    public function deleteTodo($id){
    	
    	$todo = Todo::findOrFail($id);

        $todo->delete();
        return redirect()
            ->route('todo.index')
            ->with('flash_notification.message', 'Todo deleted successfully')
            ->with('flash_notification.level', 'success');
    }


}
