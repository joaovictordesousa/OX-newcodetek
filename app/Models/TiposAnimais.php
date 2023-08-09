<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposAnimais extends Model
{
    use HasFactory;

    protected $table = 'tipos_animais';

    protected $fillable = ['id', 'nome'];

    public $timestamps = false;


}
