<?php

use App\TrainingSheet;
use App\Exercise;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * 
 * Route for the homepage
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

/**
 * 
 * Routes generated by 'auth' mechanism, reach laradocs@authentication for more details about it.
 */
Auth::routes();

/**
*
*A group of routes that are only avaliable if the user is authenticated, the middleaware 'auth' is generated by the framework 
*/ 

Route::group(['middleware' => ['auth']], function(){
    
    /**
     * 
     * Group of routes handling the exercise portion of the application
     */

    //route returning the view form to insert a exercise into the database.
    Route::get('/cadexer', function()
    {   
        return view('insertExercise');
    });

    //Route leading the filled form to the store method inside the exercise controller.
    Route::post('/cadexer', 'ExerciseController@store')->name('insertExercise');

    /**
     * 
     * Group of routes handling the ''sheet'' portion of the application
     */
    Route::get('/createsheet', function()
    {
        return view('createTrainingSheet');
    })->name('createsheet');

    Route::post('/createsheet', 'TrainingSheetController@store')->name('insertsheet');

    Route::get('/sheet', 'TrainingSheetController@mostrar')->name('sheet');

});
//demo
/**
 * seeds the database with some exercises
 */
Route::get('/seed', 'ExerciseController@seed');

/**
 * seeds the database with one training sheet with user id 1 
 */

Route::get('/seeder', 'TrainingSheetController@seeder');



