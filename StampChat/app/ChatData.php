<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatData extends Model
{
    protected $fillable = [
        'comment'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
}
