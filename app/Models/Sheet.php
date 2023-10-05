<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag',
        'bull_tag',
        'inseminator_name',
        'insemination_date',
        'birth_prediction',
        'obsinseminacao'
    ];

    public static function validateData($data)
    {
        $rules = [
            'tag' => 'required|string|max:255',             
            'bull_tag' => 'required|string|max:255', 
            'inseminator_name' => 'required|string|max:255', 
            'insemination_date' => 'required', 
            'birth_prediction' => 'required',
            'obsinseminacao' => 'nullable'
        ];

        return Validator::make($data, $rules);
    }

    public static function BirthPrediction($Insemination_date) {

        $date = Carbon::parse($Insemination_date);
        $birthPrediction = $date->addMonths(9)->addDays(10);
       
        return $birthPrediction;
       
    } 

    public static function FormatDate($Insemination_date) {

        $FormattedDate = Carbon::parse($Insemination_date); 
        return $FormattedDate->format('d/m/Y');
    }
    
    public function Inseminador(): BelongsTo {
        return $this->belongsTo(Inseminador::class, 'inseminator_name'); 
        // Aqui eu tenho que passar no nome do compo da view Sheet, que é 'inseminator_name'. 
    }

    public function Racadotouro(): BelongsTo {
        return $this->belongsTo(Racadotouro::class, 'bull_tag'); 
        // Aqui eu tenho que passar no nome do compo da view Sheet, que é 'inseminator_name'. 
    }
    
}
