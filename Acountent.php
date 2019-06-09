<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acountent extends Model 
{

    protected $table = 'acountents';
    public $timestamps = true;
    protected $fillable = array('name');

    public function students()
    {
        return $this->belongsTo('\Student');
    }

}