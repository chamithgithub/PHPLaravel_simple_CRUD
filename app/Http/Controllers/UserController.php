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
    public function delete($id){
        $task=$this->task->find($id);
        $task->delete();
        return redirect()->back();
        
    }

    public function update($id){
        $task=$this->task->find($id);
        return view('components.edit',['task'=>$task]);
    }

    public function edit(Request $request,string $id){
        $task=Exdata::find($id);
        $task->update($request->all());
        return redirect()->route('index')->with("success");
    }
    
}
