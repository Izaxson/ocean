<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App/User','id');
    }

    public $table = "counties";
}
