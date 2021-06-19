<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public function Audit()
    {
        return $this->belongsTo('App\Audit');
    }
    protected $table = "departments";
}
