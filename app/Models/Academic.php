<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;
    public function academics()
    {
        return $this->belongsTo('App/Audit','id');
    }


    protected $table = "academics";
}
