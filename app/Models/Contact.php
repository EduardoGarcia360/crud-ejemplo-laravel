<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  use HasFactory;
  // protected $table = 'contacts';
  // public $timestamps = true;
  protected $primaryKey = 'id_contacto';
  
  protected $fillable = ['pnombre', 'papellido', 'correo', 'puesto', 'ciudad'];
}
