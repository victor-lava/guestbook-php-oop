<?php

class Helper {

    const DATE_FORMAT = 'M d, Y';

    public static function str_limit(string $string, int $limit) {

        if(strlen($string) > $limit) {
            $string = substr($string, 0, $limit);
            $string .= '...';
        }

        return $string;
    }

    public static function format_date(string $date, string $format = self::DATE_FORMAT) {

        $date = date($format, time($date));

        return $date;

    }

}


?>
