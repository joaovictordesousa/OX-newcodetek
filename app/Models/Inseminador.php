<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Inseminador extends Model
{
    use HasFactory;

    protected $table = 'inseminador';

    protected $fillable = [
        'name'
    ];

    public function Sheet(): BelongsTo
    {
        return $this->belongsTo(Sheet::class, 'name');
        // Aqui eu tenho que passar no nome do compo da view Inseminador, que é 'name'. 
    }
}
