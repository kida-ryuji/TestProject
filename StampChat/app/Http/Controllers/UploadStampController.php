<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadStampData;

class UploadStampController extends Controller
{
    public function uploadStamp()
    {
        return view('uploadStamp');
    }

    public function upload(Request $request)
    {
        $image_name = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->storeAs('upload_stamp', $image_name, 'public_uploads');

        UploadStampData::insert([
            'path' => $path
        ]);
        return redirect('uploadStamp');
    }
}
