<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitSetting extends Model
{
    protected $table='sitsetting';
    protected $fillable = [ 'slug', 'namesitteng', 'value', 'type'];
}
