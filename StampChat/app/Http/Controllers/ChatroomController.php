<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatData;
use App\DefaultStampData;
use App\UploadStampData;

class ChatroomController extends Controller
{
    public function index()
    {
        $default_stamps = DefaultStampData::get();
        $upload_stamps = UploadStampData::get();
        return view('chatroom', ["default_stamps" => $default_stamps, "upload_stamps" => $upload_stamps]);
    }

    public function getData()
    {
        $comment = ChatData::orderBy('created_at', 'ASC')->get();
        $json = ['comments' => $comment];
        return response()-> json($json);
    }

    public function add(Request $request)
    {
        $comment = $request->input('stamp');
        $data = ChatData::create([
            'stamp' => $comment
        ]);
        return response($data->id);
    }
}
