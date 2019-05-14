<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use App\ManageMembers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $topRated = ManageMembers::getTop5Rated();
        $topPublicRated = ManageMembers::getTop5RatedByPublicRating();
        $topRawRated = ManageMembers::getTop5RatedByRawRating();
        $corrupt_rated = ManageMembers::getTopCorrupted();
        $fraud_rated = ManageMembers::getTopFraud();
        $topArtical = ManageMembers::getTop5Artical();
        
        return view('welcome')->with('topRated',$topRated)->with('topPublicRated',$topPublicRated)->with('topRawRated',$topRawRated)->with('corrupt_rated',$corrupt_rated)->with('fraud_rated',$fraud_rated)->with('topArtical',$topArtical);
    }
}
