<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploadStampData;

class AdminController extends Controller
{
    public function index()
    {
        $stamps = UploadStampData::orderBy('id', 'asc')->get();

        return view('admin',[
            'stamps' => $stamps
        ]);
    }

    public function delete(Request $request)
    {
        $stamp_path = $request->input('stamp');
        // error_log(var_export($stamp, true), 3, './debug.txt');

        \File::delete($stamp_path, 'public_uploads');
        UploadStampData::where('path', $stamp_path)->delete();

        return redirect('admin')->with('success', '削除完了しました。');
    }
}
