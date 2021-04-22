<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DefaultStampData;

class StampRankingController extends Controller
{
    public function ranking()
    {
        $stamps = DefaultStampData::orderBy('count', 'DESC')->get();

        return view('stampRanking', ['stamps' => $stamps]);
    }

    // public function getData()
    // {

    // }
    //
}
