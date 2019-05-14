<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ManageMembers;
use App\Images;
use Excel;
use View;
use Validator;

class AdminController extends Controller {

    public function index() {
        return view('admin_login');
    }

    public function home() {
    	$this->middleware('auth');
    	return view('admin_dashboard');
    }

    public function mps() {
    	$this->middleware('auth');
    	$listing = ManageMembers::all();
    	return view('admin_mps')->with('listing',$listing);
    }

    public function uploadMembers() {
    	$this->middleware('auth');
    	return view('admin_upload_member');
    }

    public function rmdir_recursive($dir) {
	    foreach(scandir($dir) as $file) {
	       if ('.' === $file || '..' === $file) continue;
	       if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
	       else unlink("$dir/$file");
	   }
	   rmdir($dir);
	}


    public function uploadMembersImages(Request $request) {
    	$data	=	$request->all();
		$file = Input::file('zip_file');
		$input = array('import_file' => $file);
		$folderName	=	$request->input('folder_name');
		

		if($file->getClientOriginalExtension()){
			$filename =  $folderName . "." . $file->getClientOriginalExtension();
		} else {
			$filename =  $folderName . ".zip";
		}
		$destinationPath = storage_path().'/img/'.$folderName.'/';
			
			
		Input::file('zip_file')->move($destinationPath, $filename);
		$Full_readable_path =  $destinationPath.$filename;

		$zip = new \ZipArchive();
        $x = $zip->open($Full_readable_path);  // open the zip file to extract
        if ($x === true) {
            $zip->extractTo($destinationPath); // place in the directory with same name  
            $zip->close();

            unlink($Full_readable_path);
        }
        return view('admin_upload_excel_member')->with('message','Your .zip file was uploaded and unpacked.')->with('folderName',$folderName);
    }

    public function importMembers(Request $request) {
    	$this->middleware('auth');

    	$data	=	$request->all();
		$validator = Validator::make($request->all(), [
			'file' => 'required|mimes:xlsx,xls|max:10240',
		]);

		if ($validator->fails()) {
			$eeor = $validator->errors()->all();
			return \Response::json(['success' => false, 'errors' => $eeor[0]]);
        } else {
			$file = Input::file('file');
			$input = array('import_file' => $file);
			$folderName	=	md5(microtime() . $file->getClientOriginalName());

			if($file->getClientOriginalExtension()){
				$filename =  $folderName . "." . $file->getClientOriginalExtension();
			} else {
				$filename =  $folderName . ".csv";
			}
			$destinationPath = storage_path().'/doc/'.$folderName.'/';
			if (\File::isDirectory($destinationPath))
			{
				return \Response::json(['success' => false, 'errors' => 'Something missing with file. Please upload again.']);
			}else{
				\File::makeDirectory($destinationPath);
			}
			
			Input::file('file')->move($destinationPath, $filename);
			$Full_readable_path =  $destinationPath.$filename;
			$reader_data = Excel::load($Full_readable_path, function($reader) {

			})->get();
			$insert_array = array();
			$org_reader_data = $reader_data->all();
			$folderName_name = $request->input('folderName');
			if(!empty($reader_data) && $reader_data->count()){
				foreach ($org_reader_data as $key => $value) {
					$insert = array();
					foreach ($value as $key1 => $value2) {
						if($key1=='image') {
							$insert_array[$key1] = $folderName_name."/".$value2;
						} else {
							$insert_array[$key1] = $value2;
						}
					}
					ManageMembers::insertMembers($insert_array);
				}
			}
			return redirect('admin/mps');
		}
    }
}
