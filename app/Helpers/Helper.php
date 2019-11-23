<?php

namespace App\Helpers;

use DB;

class Helper
{
    public static function formatRupiah($number)
    {
        $rupiah = "Rp " . number_format($number,2,',','.');
	    return $rupiah;
    }

    public static function checkImagePath($path)
    {
        return (isset($path)) && file_exists(storage_path('app/'.$path)) ? $path : asset('placeholder.png');
    }

    public static function checkProfileImg($path)
    {
        return (isset($path)) && file_exists(asset($path)) ? $path : asset('default-profile.png');
    }

    public static function getLocId($location_name)
    {
        $location = DB::table('locations')->select('id')->where('name', 'LIKE', '%'.$location_name.'%')->get();

        return $location->count() > 0 ? $location->first()->id : 1;
    }
}