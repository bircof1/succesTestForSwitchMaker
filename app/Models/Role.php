<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['title', 'description',];

    public function users(){
        return $this->hasMany(User::class);
    }
}
