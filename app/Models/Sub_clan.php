<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_clan extends Model
{
    use HasFactory;
    public function clan()
    {
        return $this->belongsTo('App\Clan','id');
    }
    protected $table = "subclans";
    


        
}
