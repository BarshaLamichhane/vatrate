<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vatoperation extends Model
{
    protected $fillable = [
        'itemname', 'quantity', 'peritemprice', 'vatrate'
    ];
}
