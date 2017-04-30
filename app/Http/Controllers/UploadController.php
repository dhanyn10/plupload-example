<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return Plupload::receive('file', function($file){
            $file->move(storage_path().'/upload/', $file->getClientOriginalName());
            return 'ready';
        });
    }
}
