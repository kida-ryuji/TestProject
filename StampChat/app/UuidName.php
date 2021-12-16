<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UuidName extends Model
{
    protected $fillable = [
        'uuid', 'name'
    ];

        protected $guarded = [
        'create_at', 'update_at'
    ];

}
