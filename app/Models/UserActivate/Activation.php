<?php

namespace App\Models\UserActivate;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Activation extends Authenticatable
{
    public $incrementing = false;
    protected $keyType = 'int';
    protected $table='activate';
     protected $primaryKey='activate_id ';
      public $timestamps = false;
      protected $fillable = [
        'activate_id',
        'user_id',
        'user_activation_token',
        'activate_date',
        'activate_time',
        'user_status'
    ];

    protected $casts = [
        'activate_id '=>'integer',
        'activate_date'=>'date',
        'activate_time'=>'datetime:H:i:s'
    ];
}
