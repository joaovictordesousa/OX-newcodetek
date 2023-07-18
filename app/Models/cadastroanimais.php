<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroanimais extends Model
{
    use HasFactory;

    protected $table = 'cadastroanimais';

    protected $fillable = [
        'nranimal',
        'racaboi',
        'dtinseminacao',
        'dtprevista'
    ];
}
