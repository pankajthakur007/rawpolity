<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageMembers extends Model
{

	protected $table = 'manage_members';

     

    public static function insertMembers($allcustomer) {
    	\DB::table('manage_members')->insert($allcustomer);   
    }

    public static function getTop5Artical($value='') {
        try { 
            $data = \DB::table('articals')
            ->select('articals.title','articals.id','articals.image_url','articals.created_at','articals.slug')
            ->orderBy('created_at', 'desc')
            ->offset(0)
            ->take(5)
            ->get();
            return $data;
        } catch (\Exception $e) {
            return $error = $e->getCode().":".$e->getMessage();
        }
    }

    public static function getTop5Rated() {
    	try { 
    		$data = \DB::table('manage_members')
    		->select('id','name','image','member_type','constituency','total_rating','total_raw_rating')
    		->orderBy('over_all_rating', 'desc')
    		->offset(0)
    		->take(5)
    		->get();
    		return $data;
    	} catch (\Exception $e) {
    		return $error = $e->getCode().":".$e->getMessage();
    	}
    }

    public static function getTop5RatedByPublicRating() {
    	$data = \DB::table('manage_members')
    	->select('id','name','image','member_type','constituency','total_rating','total_raw_rating')
    	->orderBy('total_rating', 'desc')
    	->offset(0)
    	->take(5)
    	->get();
    	return $data;
    }

    
    public static function getTop5RatedByRawRating() {
    	$data = \DB::table('manage_members')
    	->select('id','name','image','member_type','constituency','total_rating','total_raw_rating')
    	->orderBy('total_raw_rating', 'desc')
    	->offset(0)
    	->take(5)
    	->get();
    	return $data;
    }

    public static function getTopCorrupted() {
        $data = \DB::table('manage_members')
        ->select('id','name','image','member_type','constituency','total_rating','total_raw_rating','corrupt_rated','fraud_rated')
        ->orderBy('corrupt_rated', 'desc')
        ->offset(0)
        ->take(1)
        ->get();
        return $data;
    }

    public static function getTopFraud() {
        $data = \DB::table('manage_members')
        ->select('id','name','image','member_type','constituency','total_rating','total_raw_rating','corrupt_rated','fraud_rated')
        ->orderBy('fraud_rated', 'desc')
        ->offset(0)
        ->take(1)
        ->get();
        return $data;
    }

    
}
