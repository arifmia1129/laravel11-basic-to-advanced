<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index (){
        $files = File::orderBy("created_at","desc")->get();
        // dd($files);
        return view("file-upload", ['files' => $files]);
    }

    function store (Request $request){
        $file = $request->file("file");

        // $res = Storage::disk('local')->put('/', $file);

        // $res = $file->store('/', 'local');

        $res = $file->store('/', 'public');

        if($res){
            $file = new File();
            $file->file_path = $res;
            $file->save();

            return response()->json([
               'success' => true,
               'message'=> 'File uploaded successfully',
               'data'=> $file,
            ]);
        }else {
            return response()->json([
                'success'=> false,
                'message'=> 'Failed to upload file'
            ]);
        }
    }
}
