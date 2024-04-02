<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Exdata;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $task;
    public function __construct()
    {
        $this->task = new Exdata();
    }
    public function index()
    {
        $res['tasks'] = $this->task->all();
        return view('components.index')->with($res);
    }

    //user create
    public function create()
    {
        return view('components.create');
    }
    public function store(Request $request)
    {
        $this->task->create($request->all());
        return redirect()->route('index');
    }
    
}
