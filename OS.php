<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OS extends Model 
{

    protected $table = 'os';
    public $timestamps = true;
    protected $fillable = array('name');

    public function students()
    {
        return $this->belongsTo('\Student');
    }

}