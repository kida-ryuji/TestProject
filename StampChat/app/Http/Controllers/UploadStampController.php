<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadStampData;
use \InterventionImage;

class UploadStampController extends Controller
{
    public function uploadStamp()
    {
        return view('uploadStamp');
    }

    public function upload(Request $request)
    {
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        $path = $request->file('image')->storeAs('upload_stamp', $name, 'public_uploads');

        $height = 250;

        $image = InterventionImage::make($file);
        $image->resize(null, $height, function($constraint) {$constraint->aspectRatio();});
        $image->save(public_path('upload_stamp/' . $name ) );

        UploadStampData::insert([
            'path' => $path
        ]);

        return redirect('uploadStamp');
       
    }
}
