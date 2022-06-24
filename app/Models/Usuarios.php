<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    public function Rols()
    {
    	return $this->belongsTo(Rol::class,'rolid','id');
    }
}
