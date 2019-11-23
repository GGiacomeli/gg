<?php

namespace App\Http\Controllers;

use App\TrainingSheet;
use App\Exercise;
use App\Cardio; 
use App\Http\Controllers\ExerciseController;
use Illuminate\Http\Request;

class TrainingSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $trainingSheet = TrainingSheet::all();
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createsheet');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validateExercise = $request->validate([
            'name' => 'required',
            'sequence' => 'required',
            'series' => 'required',
            'reps' => 'required',
            'weight' => 'required' 
        ]);

        $validateCardio = $request->validate([
            'aparelho' => 'required',
            'time' => 'required'
        ]);

        dd($validateCardio);
        
        /*
        $cardio->name = request('place');
        $cardio->time = request('time');
        $cardio->save();
        */

        //dd($validateData);

        foreach($validateExercise as $exer){

            $exercise = Exercise::create(
                ['name' => $exer['name']],
                ['sequence' => $exer['sequence']],
                ['series' => $exer['series']],
                ['reps' => $exer['reps']],
                ['weight' => $exer['weight']]);
            };
            /*
        $teste = new Exercise();

        $teste->sequence = request('sequence');
        $teste->name = request('name');
        $teste->series = request('series');
        $teste->reps = request('reps');
        $teste->weight = request('weight');

        echo $teste;
*/


        
        

    }

}
