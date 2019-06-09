<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model 
{

    protected $table = 'networking';
    public $timestamps = true;
    protected $fillable = array('name');

    public function students()
    {
        return $this->belongsTo('\Student');
    }

}