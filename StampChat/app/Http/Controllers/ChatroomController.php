<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatData;
use App\DefaultStampData;
use App\UploadStampData;
use App\UuidName;
use Faker\Generator as Faker;

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

    public function add(Request $request, Faker $faker)
    {
        $uuid = $request->input("uuid");
        $name = UuidName::where("uuid", $uuid)->value("name");
        if(is_null($name)){
            $name = $faker->name;
            UuidName::create([
                "uuid" => $uuid,
                "name" => $name
            ]);
        }
        $comment = $request->input('stamp');
        $data = ChatData::create([
            'stamp' => $comment,
            "user_name" => $name
        ]);
        DefaultStampData::where("path", $comment)->increment('count');

        return response($data->id);
    }
}
