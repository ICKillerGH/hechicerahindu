<?php

namespace App\Http\Controllers\Web;

use App\Models\Horoscope;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Support\ZodiacSigns\NameTransformer;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'zodiacSigns' => config('custom.zodiac_signs'),
        ]);
    }

    public function horoscopes(NameTransformer $nameTransformer, $zodiacSign)
    {
        $zodiacSigns = collect(config('custom.zodiac_signs'));

        $zodiacSign = Arr::first($zodiacSigns, fn($sign) => $sign['name'] === $nameTransformer->fromSpanishSlugToEnglish($zodiacSign));

        return view('horoscopes', [
            'zodiacSigns' => $zodiacSigns,
            'zodiacSign' => $zodiacSign,
            'horoscope' => Horoscope::latest('id')->firstWhere('zodiac_sign', $zodiacSign['name']),
        ]);
    }
}
