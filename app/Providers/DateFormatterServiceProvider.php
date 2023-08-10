<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DateFormatterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public static function formattedDate($dateTime)
    {
        $createdDate = strtotime($dateTime);
        $day = date('j', $createdDate);
        $month = date('n', $createdDate);

        $translatedMonths = [
            1 => 'janeiro',
            2 => 'fevereiro',
            3 => 'março',
            4 => 'abril',
            5 => 'maio',
            6 => 'junho',
            7 => 'julho',
            8 => 'agosto',
            9 => 'setembro',
            10 => 'outubro',
            11 => 'novembro',
            12 => 'dezembro',
        ];

        return $day . ' de ' . $translatedMonths[$month] . ' de ' . date('Y \à\s H:i', $createdDate);
    }
}
