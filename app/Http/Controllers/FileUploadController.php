<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index (){
        return view("file-upload");
    }

    function store (Request $request){
        $file = $request->file("file");

        // $res = Storage::disk('local')->put('/', $file);

        // $res = $file->store('/', 'local');

        $res = $file->store('/', 'public');

        return response()->json($res);
    }
}
