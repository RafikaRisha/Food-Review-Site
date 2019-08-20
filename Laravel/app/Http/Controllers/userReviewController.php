<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Reviews;

class userReviewController extends Controller
{
   function index(){
       return view('pages.userReview');
   }

   function save(Request $request){
      $userReview = new Reviews() ;

      $userReview->food_name = $request->food_name;
      $userReview->restaurant_name = $request->restaurant_name;
      $userReview->area = $request->area;
      $userReview->comment = $request->comment;
      $userReview->ratings = $request->ratings;

      $userReview->save();
      return redirect('\userReview')->with('message', 'Successfully Submitted Your Reviews');
    
    }

    public function show(){
        $allReviews = reviews::all();
        return view('pages.allReviews',['reviews' => $allReviews]);
        
    }

    // function insert(Request $req){
    //     $food_name = $req->input('food_name');
    //     $restaurant_name = $req->input('restaurant_name');
    //     $area = $req->input('area');
    //     $comment = $req->input('comment');

    //     $data = array('food_name'=>$food_name, 'restaurant_name'=>$restaurant_name, 'area'=>$area, 'comment'=>$comment);
    //     DB::table('reviews')->insert($data);
    // }
}

