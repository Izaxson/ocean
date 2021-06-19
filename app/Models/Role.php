<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    public function user()
    {
        return $this->belongsTo('App/User','role_id');
    }
    protected $table = "roles";
}
