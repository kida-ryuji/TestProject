<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddStampController extends Controller
{
    public function addStamp()
    {
        return view('addStamp');
    }

    public function upload(Request $request)
    {
        $path = $request->file('image')->store('upload_stamp', 'public_uploads');

        // UploadStampData::create([
        //     'path' => $path
        // ]);
        return redirect('addStamp');
    }
}
