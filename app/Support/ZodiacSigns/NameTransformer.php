<?php

namespace App\Support\ZodiacSigns;

use Illuminate\Support\Str;

class NameTransformer
{
    public $zodiacSigns;

    public function __construct()
    {
        $this->zodiacSigns = config('custom.zodiac_signs');
    }

    public function fromSpanishSlugToEnglish(string $slug)
    {
        return [
            'aries' => 'aries',
            'tauro' => 'taurus',
            'geminis' => 'gemini',
            'cancer' => 'cancer',
            'leo' => 'leo',
            'virgo' => 'virgo',
            'libra' => 'libra',
            'escorpio' => 'scorpio',
            'sagitario' => 'sagittarius',
            'capricornio' => 'capricornius',
            'acuario' => 'aquarius',
            'piscis' => 'pisces',
        ][$slug] ?? '';
    }

    public function getSpanishSlugs()
    {
        return collect($this->zodiacSigns)
            ->map(fn($zodiacSign) => Str::slug(__($zodiacSign['name'])))
            ->toArray();
    }
}
