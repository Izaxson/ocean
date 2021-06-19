<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;
    protected $table= "sub_counties";
    public function subcounties()
    {
        return $this->belongsTo('App/County','id');
    }
}
