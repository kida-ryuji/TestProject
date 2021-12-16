<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatData extends Model
{
    protected $fillable = [
        'stamp', "user_name"
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
}
