<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = ['nome', 'cargo', 'imagem'];
}
