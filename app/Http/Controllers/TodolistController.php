<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Home', ['todos' => Todolist::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $form = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        Todolist::create($form);
        return redirect('/')->with('message', 'Todo created');
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
    public function edit(Todolist $todolist)
    {
        //
        return view('edit', ['todo' => $todolist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Todolist $todolist)
    {
        //
        if (request()->title) {
            # code...
            $form = request()->validate([
                'title' => 'required',
                'content' => 'required',

            ]);
            $todolist->update($form);
        } else {
            // Mark as done
            $form['is_done'] = !$todolist->is_done;
            $todolist->update($form);
        }
        return back()->with('message', 'Todo is Done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todolist $todolist)
    {
        //
        $todolist->delete();
        return redirect('/');
    }
}
