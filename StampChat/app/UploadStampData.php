<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadStampData extends Model
{
    protected $fillable = [
        'path'
    ];

    // protected $guarded = [
    //     'create_at', 'update_at'
    // ];
}
