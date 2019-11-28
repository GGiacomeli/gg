<?php

namespace App\Http\Controllers;

use App\TrainingSheet;
use App\Exercise;
use App\Cardio; 
use App\User;
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
    public function create(array $data)
    {
        return view('insertSheet');
    }

    public function store(Request $request)
    {
        $targetId = request('sendto');
        $trainingSheet = new TrainingSheet();
        $trainingSheet->user_id = $targetId;
        $trainingSheet->save();
        $eNameHandler = request('exercisename');

        //$try = Exercise::where('name', '=', request('exercisename'))->get('id');
        foreach($eNameHandler as $exercise)
        {
            $trainingSheet->exercises()->attach(Exercise::where('name', '=', $exercise)->get('id'));
        }
        
        //$trainingSheet->users()->attach(User::Where('email', '=', request('sendto'))->get('id')); < retorna uma coleção com um array dentro e por fim dá erro
    }

    public function seeder()
    {
        $trainingSheet = new TrainingSheet();
        $trainingSheet->user_id = 1;
        $trainingSheet->save();
        $exercises = Exercise::all();

        foreach($exercises as $exercise)
        {
            $trainingSheet->exercises()->attach($exercise);
        }
    }

    public function mostrar()
    {
        $merda = User::with([
            'trainingSheets.exercises' => function($q) use (&$exer){
                $exer = $q->get()->unique();
            }
        ])->get()->pluck('user.trainingSheets.exercises')->all();

       return view('sheet')->with('exer', $exer);
    }
}


