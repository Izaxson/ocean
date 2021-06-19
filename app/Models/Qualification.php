<?php

namespace App\Models;

use App\Models\Audit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Qualification extends Model
{
    use HasFactory;
    protected $table="qualifications";

    public function qualifications()
    {
        return $this->belongsTo('App\Audit');
    }
}
