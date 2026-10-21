<?php

namespace App\Support;

class FrenchNumber
{
    private const UNITS = [
        'zéro', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf',
        'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf',
    ];

    private const TENS = [
        2 => 'vingt', 3 => 'trente', 4 => 'quarante',
        5 => 'cinquante', 6 => 'soixante', 7 => 'soixante', 8 => 'quatre-vingt', 9 => 'quatre-vingt',
    ];

    public static function amountInWords(float $amount): string
    {
        $dinars = (int) floor($amount);
        $millimes = (int) round(($amount - $dinars) * 1000);

        if ($millimes >= 1000) {
            $dinars++;
            $millimes -= 1000;
        }

        $text = self::integer($dinars).' dinar'.($dinars > 1 ? 's' : '').' tunisien'.($dinars > 1 ? 's' : '');

        if ($millimes > 0) {
            $text .= ' et '.self::integer($millimes).' millime'.($millimes > 1 ? 's' : '');
        }

        return ucfirst($text);
    }

    public static function integer(int $number): string
    {
        if ($number === 0) {
            return 'zéro';
        }

        if ($number < 0) {
            return 'moins '.self::integer(-$number);
        }

        $parts = [];

        if ($number >= 1000000000) {
            $billions = intdiv($number, 1000000000);
            $parts[] = ($billions === 1 ? 'un milliard' : self::integer($billions).' milliards');
            $number %= 1000000000;
        }

        if ($number >= 1000000) {
            $millions = intdiv($number, 1000000);
            $parts[] = ($millions === 1 ? 'un million' : self::integer($millions).' millions');
            $number %= 1000000;
        }

        if ($number >= 1000) {
            $thousands = intdiv($number, 1000);
            $parts[] = ($thousands === 1 ? 'mille' : self::belowThousand($thousands).' mille');
            $number %= 1000;
        }

        if ($number > 0) {
            $parts[] = self::belowThousand($number);
        }

        return implode(' ', $parts);
    }

    private static function belowThousand(int $number): string
    {
        if ($number < 100) {
            return self::belowHundred($number);
        }

        $hundreds = intdiv($number, 100);
        $rest = $number % 100;
        $text = $hundreds === 1 ? 'cent' : self::UNITS[$hundreds].' cent';

        if ($rest === 0) {
            return $hundreds > 1 ? $text.'s' : $text;
        }

        return $text.' '.self::belowHundred($rest);
    }

    private static function belowHundred(int $number): string
    {
        if ($number < 20) {
            return self::UNITS[$number];
        }

        if ($number < 70) {
            $tens = intdiv($number, 10);
            $unit = $number % 10;

            if ($unit === 0) {
                return self::TENS[$tens];
            }

            return self::TENS[$tens].($unit === 1 ? ' et un' : '-'.self::UNITS[$unit]);
        }

        if ($number < 80) {
            $rest = $number - 60;

            if ($rest === 11) {
                return 'soixante et onze';
            }

            return 'soixante-'.self::belowHundred($rest);
        }

        $rest = $number - 80;

        if ($rest === 0) {
            return 'quatre-vingts';
        }

        return 'quatre-vingt-'.self::belowHundred($rest);
    }
}
