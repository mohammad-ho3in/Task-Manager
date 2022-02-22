<?php

namespace App\Http\Controllers\Practice;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnePracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tasks=Task::all();
        return view('practice.practice1.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('practice.practice1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
         'name' => 'required|string|min:4|max:255'
     ]);
      $task=new Task;
      $task->create($request->all());
      return redirect()->route('practice1.task.index')->with('success','تسک جدید با موفقیت اضافه شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $task=Task::find($id);
      return view('practice.practice1.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
         'name' => 'required|string|min:4|max:255'
     ]);
     $task=Task::find($id);
     $task->name=$request->name;
     $task->save();
        return redirect()->route('practice1.task.index')->with('success','با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $task=Task::find($id);
      $task->delete();
      return redirect()->route('practice1.task.index')->with('success','با موفقیت حذف شد.');
    }
}
