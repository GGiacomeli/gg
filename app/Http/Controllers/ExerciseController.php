<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

/**
 * 
 * Controller class for the exercises, it handles all requests from the view
 * if necessary it retrieves data from the database
 * @author: Gustavo Alves Giacomeli
 */
class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $exercises = Exercise::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('insertExercise');
    }

    /**
     * Creates a new object and store the created resource in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $exercise = new Exercise();

        $exercise->name = request('name');
        $exercise->category = request('category');
        $exercise->description = request('description');
        $exercise->series = request('series');
        $exercise->reps = request('reps');
        $exercise->weight = request('weight');

        $exercise->save();

         if($exercise->save() == true)
            echo "<script type='text/javascript'>alert('Exercicio cadastrado com sucesso!'); window.location.href = index.php;</script>";
            return view('userpanel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function show(exercise $exercise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(exercise $exercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exercise $exercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\exercise  $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(exercise $exercise)
    {
        //
    }
}
