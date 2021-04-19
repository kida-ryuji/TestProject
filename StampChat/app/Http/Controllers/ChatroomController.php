<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatData;

class ChatroomController extends Controller
{
    public function index()
    {
        return view('chatroom');
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
        ChatData::create([
            'stamp' => $comment
        ]);
        return redirect('chatroom');
    }
}
