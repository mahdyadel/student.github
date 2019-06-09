<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB extends Model 
{

    protected $table = 'database';
    public $timestamps = true;
    protected $fillable = array('name');

    public function students()
    {
        return $this->belongsTo('\Student');
    }

}