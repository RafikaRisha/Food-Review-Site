<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ratings extends Model
{
    public static function avg_ratings(){
        $result_ratings = DB::select('call food_ratings("res_name")');
        return $result_ratings;    
    }
}
