<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as HandleFile;
use Str;

class FileUploadController extends Controller
{
    function index (){
        $files = File::orderBy("created_at","desc")->get();

        $isFileExists = File::find(3);

        if($isFileExists) {
            HandleFile::delete(public_path($isFileExists->file_path));
            $isFileExists->delete();
        }
        // dd($files);
        return view("file-upload", ['files' => $files]);
    }

    function store (Request $request){

        $request->validate([
            'file'=>['required', 'image']
        ]);

        $file = $request->file("file");

        // $res = Storage::disk('local')->put('/', $file);

        // $res = $file->store('/', 'local');

        // $res = $file->store('/', 'public');
        // $res = $file->store('/', 'public_dir');

        $newFileName = 'images'. Str::uuid();
        $originalExtension = $file->getClientOriginalExtension();
        $formatFileName =$newFileName.'.'.$originalExtension;

        $res = $file->storeAs('/', $formatFileName, 'public_dir');

        if($res){
            $file = new File();
            $file->file_path = 'uploads/'.$res;
            $file->save();

            // return redirect()->back();
            // return redirect()->route('home');
            return redirect()->away('https://www.google.com.au');
        }else {
            return response()->json([
                'success'=> false,
                'message'=> 'Failed to upload file'
            ]);
        }
    }

    function downloadFile () {
        return Storage::disk('local')->download('aNHrtMxjPwEBThnUwnUGZsPliXNi0wnY6ag8mah9.png');
    }
}
