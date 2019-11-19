<?php
 
if (!function_exists('formatRupiah')) {

    function formatRupiah($number)
    {
        $rupiah = "Rp " . number_format($number,2,',','.');
	    return $rupiah;
    }

}

if (!function_exists('checkImagePath')) {

    function checkImagePath($path)
    {
        return (isset($path)) && file_exists(storage_path('app/'.$path)) ? $path : asset('placeholder.png');
    }

}

if (!function_exists('checkProfileImg')) {
    function checkProfileImg($path)
    {
        return (isset($path)) && file_exists(asset($path)) ? $path : asset('default-profile.png');
    }
}

    