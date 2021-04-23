<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefaultStampData extends Model
{
    protected $fillable = [
        'count', 'update_at'
    ];

        protected $guarded = [
        'create_at'
    ];

}
