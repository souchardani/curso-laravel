<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    //definimos la relacion
    //si es 1:1 es phone, si es 1:n sería phones
    // public function phone(){
    //     return $this->hasOne(Phone::class);
    //     /*como el la talbla telefono hemos relacionado con el nombre user_id,
    //     laravel ya sabe que debe buscar los telefonos con el user_id correspondiente
    //     a este objeto, en caso de no haber respetado el nombre, habria que escribir en
    //     hasOne el nombre de la clave foranema

    //      return $this->hasOne(Phone::class, "user_id", "id");
    //      decimos el modelo de la relacion
    //      la clave foranea en la tabla del modelo phones "user_id"
    //      y el id de mi modelo para que conincida ("id") (de la tabla this, en este caso user)
    //     */
    // }

    // si la relacion es 1:n y un usuario tiene multiples telefonos,
        public function phones(){
            return $this->hasMany(Phone::class);
        }

    //si la relacion es n:m
        public function roles(){
            return $this->belongsToMany(Role::class)->withPivot("added_by");
        }


    //relacion de paso
    public function phoneSim(){
        $this->hasOneThrough(Sim::class, Phone::class);
        //si no tenemos la convencion de nombres
    }



}
