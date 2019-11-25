<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Model class for the Exercise
 * this class contains information about what is massfillable,
 * relationships pertinent to a model layer.
 *
 * @author: Gustavo Alves Giacomeli
 */
class Exercise extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('name',
    'sequence',
    'series',
    'reps',
    'weight');


    /**
     * Defines the relationship in a eloquent (model) level between exercise and training sheet.
     * 
     */
    public function trainingSheet()
    {
        return $this->belongsToMany('App\TrainingSheet');
    }
}

