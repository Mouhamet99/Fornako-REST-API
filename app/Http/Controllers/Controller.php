<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function checkSimalarity($str1, $str2): bool
    {
        $str1 = strtolower($str1);
        $str2 = strtolower($str2);
        similar_text($str1, $str2, $per);
        return int($per) > 70;
    }
}
