<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CallVisit extends Model
{
    //
    use HasFactory;

    protected $table = 'web_pse_callvisit';

    protected $fillable=[
        'visitdate',
        'topic',
        'nextvisit',
        'nexttopic',
        'customer',
        'pic',
        'qty',
        'phone',
        'location',
        'type',
        'remark',
    ];
}
