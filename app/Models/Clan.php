<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    use HasFactory;
    public function sub_clan()
    {
        return $this->hasMany('App\Sub_clan');
    }

    public function clans()
    {
        return $this->belongsTo('App\Ethnicity');
    }

    protected $table = "clans";
}
