<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Racadotouro extends Model
{
    use HasFactory;

    protected $table = 'Racadotouro';

    protected $fillable = [
        'bull_tag'
    ];

    public function Sheet(): BelongsTo
    {
        return $this->belongsTo(Sheet::class, 'bull_tag');
        // Aqui eu tenho que passar no nome do compo da view Inseminador, que é 'name'. 
    }
}
