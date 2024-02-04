<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function Users(){
        return $this->belongsToMany(User::class);
        // return $this->belongsToMany(User::class)->withPivot("added_by");
        //si no respetamos la convencion de nombres, indicamos tambien
        //nombre de la tabla
        //clave foranea
        //clave relacionada
        // return $this->belongsToMany(User::class, "role_user", "user_id", "role_id");
    }
}
