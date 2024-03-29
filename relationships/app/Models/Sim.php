<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function phone(){
        $this->belongsTo(Phone::class);
    }
}
