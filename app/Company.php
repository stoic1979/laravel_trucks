<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company';


    /*
    * A mass assignment is where you pass an array of data to 
    * Model::create() or Model::update() the way we’re doing 
    * in our controllers, instead of setting one field at a time.
    * To fix this simply add an empty guarded property to each model.
    */
    protected $guarded = [];
}
