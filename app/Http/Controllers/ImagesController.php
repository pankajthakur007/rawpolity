<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ManageMembers;
use App\Images;
use Excel;
use View;
use Validator;


class ImagesController extends Controller {
	public function __construct() {
      	$this->middleware('auth');
    }

     public function sliders(){
    	$listing = Images::where(["type"=>2])->get();
    	return view('admin_slider')->with('listing',$listing);
    }

    public function logo(){
    	$listing = Images::where(["type"=>1])->get();
    	return view('admin_logo')->with('listing',$listing);
    }

    public function uploadSlider() {
    	return view('admin_upload_slider');
    }

    public function uploadLogo() {
        return view('admin_upload_logo');
    }

    public function uploadLogoData(Request $request) {
        $imageName = time().'.'.request()->image_url->getClientOriginalExtension();

        request()->image_url->move('storage/images', $imageName);

        $user_data =  Images::create([
            'image_url' => $imageName,
            'type' => $request->input('type'),
            'image_heading' => '',
            'image_description' => '',
            'status' => 2,
        ]);
        if($user_data) {
            \Session::flash('message', 'Logo has been uploaded successfully.');
            return redirect()->back();
        } else {
            \Session::flash('error-message', 'Try Again.');
            return redirect()->back();
        }
    }

    public function uploadSliderData(Request $request) {
    	// $validator =  $this->validate($request,[
     //    'image_heading' => 'required',
     //    'image_description' => 'required',
     //    'image_url' => 'required',
     //    'type' => 'required',
     //    ]);

     //    if ($validator->fails()) {
     //        return redirect()->back()->withInput($request->input())->withErrors($validator);
     //    }


       $imageName = time().'.'.request()->image_url->getClientOriginalExtension();

        request()->image_url->move('storage/images', $imageName);

		$user_data =  Images::create([
            'image_url' => $imageName,
            'type' => $request->input('type'),
            'image_heading' => $request->input('image_heading'),
            'image_description' => $request->input('image_description'),
            'status' => 1,
        ]);
        if($user_data) {
            \Session::flash('message', 'Slider has been uploaded successfully.');
            return redirect()->back();
        } else {
            \Session::flash('error-message', 'Try Again.');
            return redirect()->back();
        }
    }

    public function logoActivate($id) {
        $done = Images::where(['type'=>1])->update(['status' => 2]);

        $img = Images::find($id);
        $img->status = 1;
        $img->save();
        \Session::flash('message', 'Logo has been Activated successfully.');
        return redirect()->back();
    }

    public function logoDeactivate($id) {
        $done = Images::where(['type'=>1,'status'=>2])->count();
        if($done>1) {
            $img = Images::find($id);
            $img->status = 2;
            $img->save();
            \Session::flash('message', 'Logo has been de-activated successfully.');
            return redirect()->back();
        } else {

            \Session::flash('message', 'At list one logo should be activate.');
            return redirect()->back();
        }
        
    }

    public function logoDelete($id) {
        $img = Images::find($id);
        if($img->status==1) {
            \Session::flash('error-message', 'Sorry you can not delete  has activated logo.');
            return redirect()->back();
        } else {
            Images::destroy($id);
            \Session::flash('message', 'Logo has been deleted successfully.');
            return redirect()->back();
        }
        

    }

    public function sliderDeactivate($id) {
    	$img = Images::find($id);
        $img->status = 2;
        $img->save();
        \Session::flash('message', 'Slider has been de-activated successfully.');
        return redirect()->back();
    }


    public function sliderActivate($id) {
    	$img = Images::find($id);
        $img->status = 1;
        $img->save();
        \Session::flash('message', 'Slider has been activated successfully.');
        return redirect()->back();
    }


    public function sliderEdit($id) {

    	return view('admin_upload_slider')->with('listing',$listing);
    }

    public function sliderAdd() {
    	
    	return view('admin_upload_slider')->with('listing',$listing);
    }


    public function sliderDelete($id) {
        Images::destroy($id);
        \Session::flash('message', 'Slider has been deleted successfully.');
        return redirect()->back();
        
    }
}
