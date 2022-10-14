<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataemp extends Model
{
   protected $table = "emptable";
   protected $fillable = ['fname','lname','email','gender','country','salary'];
}
