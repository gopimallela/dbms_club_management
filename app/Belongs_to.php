<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belongs_to extends Model
{
    protected $table='belongs_to';
    public $primaryKey ='club_name';

     public function members(){
    	return $this->hasMany('App\Club','abbrevation');
    }
}
