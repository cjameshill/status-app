<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;

class TasksController extends Controller
{
    public function index(){
       
        return view('index');
    }
    
    public function tasks(){
        
        return view('tasks');
    }
    
    public function api() {
        
        return Task::latest()->get();
    
    }
}
