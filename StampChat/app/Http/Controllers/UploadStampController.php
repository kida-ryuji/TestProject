<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadStampData;
use \InterventionImage;

class UploadStampController extends Controller
{
    public function uploadStamp()
    {
        $stamps = UploadStampData::orderBy('id', 'desc')->get();
        
        return view('uploadStamp',[
            'stamps' => $stamps
        ]);
        // return view('uploadStamp');
    }

    public function upload(Request $request)
    {
        if ($_FILES['image']['size'] === 0) {
            return redirect('uploadStamp');
        }
        $file = $request->file('image');
        $name = $file->getClientOriginalName();

        // 同じファイル名がアップロードされたとき
        $filename = pathinfo($name, PATHINFO_FILENAME);
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        // error_log(var_export($filename . ".". $extension, true), 3, './debug.txt');
        $i = 1;
        while(file_exists('upload_stamp/' . $name )){
            $name = $filename . "(" . $i . ")." . $extension;
            $i++;
            if($i>100){
                break;
            }
        }

        $path = $request->file('image')->storeAs('upload_stamp', $name, 'public_uploads');

        //画像の縦幅横幅の指定
        $stamp_width = 250;
        $stamp_height = 250;

        //画像の縦幅横幅の取得
        $img_width = InterventionImage::make($file)->width();
        $img_height = InterventionImage::make($file)->height();

        // error_log(var_export($img_width, true), 3, './debug.txt');
        // error_log(var_export($img_height, true), 3, './debug.txt');

        //画像のリサイズ（縦横大きいほうを縮小してアスペクト比は維持）
        if ($img_height > $img_width)
        {
            $image = InterventionImage::make($file);
            $image->resize(null, $stamp_height, function($constraint) {$constraint->aspectRatio();});
            $image->save(public_path('upload_stamp/' . $name ) );
        }
        else
        {
            $image = InterventionImage::make($file);
            $image->resize($stamp_width, null, function($constraint) {$constraint->aspectRatio();});
            $image->save(public_path('upload_stamp/' . $name ) );
        }

        //DBへ挿入
        $filename = pathinfo($name, PATHINFO_FILENAME);
        UploadStampData::insert([
            'path' => $path,
            'stamp_name' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('uploadStamp');
       
    }

    public function getData()
    {
        // $stamp = UploadStampData::orderBy('id', 'asc')->get();
        
        // return view('uploadStamp',[
        //     'stamp' => $stamp
        // ]);
    }
}
