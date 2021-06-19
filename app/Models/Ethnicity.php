<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ethnicity extends Model
{
    use HasFactory;
    public function clan()
    {
        return $this->hasMany('App\Clan');


    }
    
    public function jobgroup()
    {
        return $this->belongsTo('App/Audit','id');
    }

    protected $table = "ethnicities";
}

