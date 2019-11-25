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
    /*
    public function create()
    {
        //
        return view('createsheet');
    }
*/
/*----------------maybe a validator for a class----------------*/ 
/*
    public function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required', 'max:255'],
            'sequence' => ['required', 'max:5'],
            'series' => ['required', 'numeric', 'max:2'],
            'reps' => ['required', 'numeric', 'max:2'],
            'weight' => ['required', 'numeric', 'max:3'] 
        ]);
    }
//
*/
    public function create(array $data)
    {
        /*
        return Exercise::create([
            'name' => $data['name'],
            'sequence' => $data['sequence'],
            'series' => $data['series'],
            'reps' => $data['reps'],
            'weight' => $data['weight']
        ]);*/
    }

    public function store(Request $request)
    {
        $trainingSheet = new TrainingSheet();
        /*
        *handles the cardio for a sheet.
        */
        $cardio = new Cardio();
        $cardio->name = request('place');
        $cardio->time = request('time');
        $cardio->save();

        $eNames = request('exercisename');

        $trainingSheet = new TrainingSheet();

        $trainingSheet->sheet_name = request('sheetName');

        foreach(request('exercisename') as $name)
        {
            $trainingSheet->exercises()->attach(Exercise::where('name', '=', $name)
                                                ->get('id'));
        }

        $trainingSheet->users()->attach(User::Where('email', '=', request('sendto'))->get('email'));

        $trainingSheet->save();
        /*
        $trainingSheet = new TrainingSheet();

        $trainingSheet->name = request('sheetName');
        /*
        foreach(request('exerciseName') as $exername)
        {
           $exercise = Exercise::where('name', $exername)->first();

            echo $exercise;
        }
        */
    }

}

/*
talvez seja util

        $user = request('sendto');

        $email = User::Where('email', '=', request('sendto'))->get('email');

*/




//as seguintes formas foram testadas, sem sucesso (obvio) cerca de 30 horas pro lixo por conta de pensar em narnia em vez de solucionar o problema.
/*


        $validateName = $request->validate([
            'name' => 'required'
        ]);

            dd($validateName);
        $names = Exercise::all();
            
        foreach($names as $exercises)
        {
            echo $exercise->name;
        }
        /*
        $validateExercise = $request->validate([
            'name' => 'required',
            'sequence' => 'required',
            'series' => 'required',
            'reps' => 'required',
            'weight' => 'required' 
        ]);

/*
        //dd($validateExercise);
        $v = json_encode($validateExercise);
        dd($v);

        Exercise::create($validateExercise);
        /*
        Exercise::create($validateExercise);

        $json = json_encode($array);
        dd($json);*/
        /*
        $exercise = new Exercise(['name' => $request->get('name'),
                                  'sequence' => $request->get('sequence'),
                                  'series' => $request->get('series'),
                                  'reps' => $request->get('reps'),
                                  'weight' => $request->get('weight')
                                  ]);
            dd($exercise);
        $exercise->save();

        //dd($request('sequence'));

            //dd($validateExercise);
            /*
        $porra = Exercise::create([
            'name' => $validateExercise['name'],
            'sequence' => $validateExercise['sequence'],
            'series' => $validateExercise['series'],
            'reps' => $validateExercise['reps'],
            'weight' => $validateExercise['weight']
        ]);

        print_r($porra);


        */
            /*
            Exercise::create($validateExercise);
            return redirect('userPanel');         

        Exercise::create($validateExercise);

        dd($validateExercise);
        
*/
/*
        $data = ['name' => request('name'),
                 'sequence' => request('sequence'),
                 'series' => request('series'),
                 'reps' => request('reps'),
                 'weight' =>request('weight')
        ];

        
        $exercise = Exercise::create($data);

        print_r ($exercise);
        /*
        $exercise = new Exercise();
        $exercise->save($data);
        /*
        Exercise::create($data);
        return back();
            /*
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

        //dd($validateExercise);
            /*
        foreach($validateExercise as $valid)
        {
            $exercicio = new Exercise();
            $exercicio->save($valid);
        }
            */
            /*
            $val = Validator($request->all());

            dd($val);
        foreach($validateExercise as $exer){

            $exercise = Exercise::create(
                ['name' => $exer['name']],
                ['sequence' => $exer['sequence']],
                ['series' => $exer['series']],
                ['reps' => $exer['reps']],
                ['weight' => $exer['weight']]);
            dd($exercise);
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
        

