<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatData;

class ChatroomController extends Controller
{
    public function index()
    {
        $comments = ChatData::get();
        return view('chatroom', ['comments' => $comments]);
    }

    public function getData()
    {
        $comment = ChatData::orderBy('created_at', 'ASC')->get();
        $json = ['comments' => $comment];
        return response()-> json($json);
    }

    public function add(Request $request)
    {
        $comment = $request->input('comment');
        ChatData::create([
            'comment' => $comment
        ]);
        return redirect('chatroom');
    }
}
