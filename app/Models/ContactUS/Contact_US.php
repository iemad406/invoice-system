<?php

namespace App\Models\ContactUS;

use Illuminate\Database\Eloquent\Model;

class Contact_US extends Model
{
    public $incrementing = false;
    protected $keyType = 'int';
    protected $table='contact';
     protected $primaryKey='contact_id';
      public $timestamps = false;
      protected $fillable = [
        'contact_id',
        'name',
        'email',
        'contact_month',
        'contact_day',
        'message',
        'contact_us_date',
        'contact_us_time'
    ];

    protected $casts = [
        'contact_id '=>'integer',
        'contact_us_date'=>'date',
        'contact_us_time'=>'datetime:H:i:s'
    ];
}
