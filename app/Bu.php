<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table="bu";
    protected $fillable =[
        'bu_name', 'bu_price', 'bu_square', 'bu_type', 'bu_small_dis', 'bu_meta', 'bu_langtude', 'bu_latetude', 'bu_status', 'user_id', 'bu_large_dis','bu_rooms','bu_rant'

    ];
}
