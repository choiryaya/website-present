<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RFID extends Model
{
    protected $guarded = [];
    public $timestamps= false;
    protected $table = 'rfid';
}
