<?php

namespace App\Models\Invoices;

use Illuminate\Database\Eloquent\Model;

class UploadInvoice extends Model
{
    public $incrementing = false;
    protected $keyType = 'int';
    protected $table='invoices';
     protected $primaryKey='invoice_id';
      public $timestamps = false;
      protected $fillable = [
        'invoice_id',
        'user_id',
        'name',
        'uploadedMonthName',
        'invoiceFileType',
        'uploadedDate'
    ];
        
    protected $casts = [
        'invoice_id'=>'integer',
        'uploadedDate'=>'date',
        'uploadedTime'=>'datetime:H:i:s'
    ];
}
