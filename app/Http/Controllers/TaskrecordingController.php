<?php

namespace App\Http\Controllers;

use App\Models\Taskrecording;
use Illuminate\Http\Request;

class TaskrecordingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('taskrecording.index', [
            'title' => 'Task Recording',
            'taskrecordings' => Taskrecording::all(),
            ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('taskrecording.create', ['title' => ' Create Task Recording']);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Taskrecording $taskrecording)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Taskrecording $taskrecording)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Taskrecording $taskrecording)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taskrecording $taskrecording)
    {
        //
    }
}