<?php

namespace App\Models\Authen;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class RegisterNewUser extends Authenticatable
{
     use Notifiable;
     protected $guard='auth_user';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $table='register';
     protected $primaryKey='user_id';
      public $timestamps = false;
      protected $fillable = [
        'user_id',
        'email',
        'user_name',
        'password',
        'user_account_date_created',
        'user_account_time_created',
        'user_remember_token'
    ];
        
    protected $casts = [
        'user_id'=>'integer',
        'user_account_date_created'=>'date',
        'user_account_time_created'=>'datetime:H:i:s'
    ];

}
