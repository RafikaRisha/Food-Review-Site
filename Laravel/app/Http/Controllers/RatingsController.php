<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ratings;


class RatingsController extends Controller
{
    public function store_pro(){
        $allratings = ratings::avg_ratings();
        return view('pages.index',['ratings' => $allratings]);
    }
    
    
    // DB::select('exec food_ratings("ratings", "res_name","avg_ratings")');
}
