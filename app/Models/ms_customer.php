<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ms_customer extends Model
{
    //
    protected $table = 'ms_customer';

    protected $fillable=[
        'code_customer',
        'nama_toko',
    ];

}
