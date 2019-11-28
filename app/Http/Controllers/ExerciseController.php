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

        $validateExercise = $request->validate([
            'name' => 'required',
            'series' => 'required',
            'reps' => 'required',
            'weight' => 'required' 
        ]);

        /*foreach($validateExercise as $valid)
        {
            $exercicio = new Exercise();
            $exercicio->create($valid);
        }
        return view('userPanel');
        */
        $exercise = new Exercise();

        $exercise->name = request('name');
        $exercise->sequence = request('sequence');
        $exercise->series = request('series');
        $exercise->reps = request('reps');
        $exercise->weight = request('weight');

        $exercise->save();
        /*sim, eu sei que é cagada*/
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

    public function seed()
    {
        $exercise = new Exercise();
        $exercise->name = 'Rosca concentrada';
        $exercise->sequence = 'A1';
        $exercise->series = 3;
        $exercise->reps = 12;
        $exercise->weight = 5;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Remada unilateral';
        $exercise->sequence = 'A2';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 40;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Crucifixo';
        $exercise->sequence = 'A3';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Supino reto';
        $exercise->sequence = 'A4';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Pulley';
        $exercise->sequence = 'A5';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Remada alta';
        $exercise->sequence = 'A6';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Desenvolvimento com halteres';
        $exercise->sequence = 'A7';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Agachamento Livre';
        $exercise->sequence = 'B1';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Mesa extensora';
        $exercise->sequence = 'B2';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Cadeira flexora';
        $exercise->sequence = 'B3';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Leg press';
        $exercise->sequence = 'B4';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Adutor';
        $exercise->sequence = 'B5';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Abdutor';
        $exercise->sequence = 'B6';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Gemeos sentado';
        $exercise->sequence = 'B7';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Superior no declinado';
        $exercise->sequence = 'C1';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();

        $exercise = new Exercise();
        $exercise->name = 'Prancha lateral';
        $exercise->sequence = 'C2';
        $exercise->series = 3;
        $exercise->reps = 10;
        $exercise->weight = 15;
        $exercise->save();
    }
}
