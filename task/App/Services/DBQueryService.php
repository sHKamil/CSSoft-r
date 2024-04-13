<?php

namespace App\Services;

class DBQueryService {

    public static function getColumnsFromParams(Array $params) : String // Changes array into string with (,) separator
    {
        $elements = "";

        foreach ($params as $value) {
            $elements .= $value . ', ';
        }

        return rtrim($elements, ', ');
    }

    public static function getPlaceholdersFromParams(Array $params) : String // Changes array into string with (,) separator
    {
        $elements = "";

        foreach ($params as $value) {
            $elements .= ':' . $value . ', ';
        }

        return rtrim($elements, ', ');
    }
}
