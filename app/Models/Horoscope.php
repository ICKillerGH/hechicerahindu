<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = [
        'from',
        'to',
    ];

    //----- Accessors -----//
    public function getDateRangeForHumansAttribute()
    {
        return sprintf('Del %s de %s al %s de %s',
            $this->from->day,
            $this->localized_from->monthName,
            $this->to->day,
            $this->localized_to->monthName
        );
    }

    public function getLocalizedFromAttribute()
    {
        return $this->from->locale(config('app.locale'));
    }

    public function getLocalizedToAttribute()
    {
        return $this->to->locale(config('app.locale'));
    }
}
