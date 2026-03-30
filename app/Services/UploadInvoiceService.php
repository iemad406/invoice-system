<?php

namespace App\Services;

use App\Models\Invoices\UploadInvoice;

class UploadInvoiceService
{
      public function registerInvoice(array $data){
             
              $create_invoice=new UploadInvoice();
              $create_invoice->invoice_id=$data['id'];
              $create_invoice->user_id=$data['user_id'];
              $create_invoice->name=$data['name'];
              $create_invoice->uploadedDay=$data['uploadedDay'];
              $create_invoice->uploadedMonthName=$data['uploadedMonthName']; 
              $create_invoice->invoiceFileType=$data['invoiceFileType'];
              $create_invoice->uploadedDate=$data['uploadedDate'];
              $create_invoice->uploadedTime=$data['uploadedTime'];
              if($create_invoice->save()){
                return true;
              }
              return false;
      }
}
