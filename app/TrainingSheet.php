<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Model class for the TrainingSheet
 * it contains relationships that are pertinent for a model layer.
 *
 * @author: Gustavo Alves Giacomeli
 */
class TrainingSheet extends Model
{

    /**
     * this method defines that a training sheet belongs to a user
     * in a one to one to one training sheet.
     * 
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * this method defines that a training sheet has many exercises
     * 
     */ 
    public function exercises()
    {
        return $this->belongsToMany('App\Exercise');
    }
}


