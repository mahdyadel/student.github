<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = array('name', 'networking_id', 'acountent_d', 'acountents_id', 'database_id', 'os_id');

    public function networks()
    {
        return $this->hasMany('\Network');
    }

    public function os()
    {
        return $this->hasMany('\OS');
    }

    public function data_base()
    {
        return $this->hasMany('\DB');
    }

    public function acountents()
    {
        return $this->hasMany('\Acountent');
    }

}