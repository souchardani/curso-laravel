<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    //en este caso es igual si es 1:1 o 1:n, ya que por la parte del phone pertenece siempre a un usuario
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sim(){
        return $this->hasOne(Sim::class);
    }
}
