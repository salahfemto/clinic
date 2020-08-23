<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
   
   protected $fillable = ['name', 'p_id', 'd_id', 'date_number', 'notes', 'date', 'time', 'type', 'money', 'adddate', 'info'];
   public $timestamps = false;

}