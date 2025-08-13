<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class planing extends Model
{
    protected $fillable = ['title' , 'description' , 'image' , 'users_id' ,
    'implementasi_todo' , 'status'];

// Model User
public function users()
{
    return $this->hasMany(planing::class, 'users_id');
}

}

