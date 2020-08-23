<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   
   protected $fillable = ['name', 'phone', 'address', 'age', 'create_date', 'notes', 'added_by'];
   public $timestamps = false;

}