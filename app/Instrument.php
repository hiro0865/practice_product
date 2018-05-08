<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'instrument' => 'required'
    );
}