<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Services\UploadInvoiceService;

use Illuminate\Support\Facades\Storage;

class UploadInvoiceController extends Controller
{
        protected UploadInvoiceService $invoice_service;

         public function __construct(UploadInvoiceService $invoice_service){
                   
                  $this->invoice_service=$invoice_service;
         }
        public function uploadFile(Request $request){
                  
                      $request->validate([
                            'invoiceFile' => 'file|check_file_extension:pdf,jpg,png,jpeg'
                        ]);
                        
                   if($request->hasFile('invoiceFile')){
                              $extension=$request->file('invoiceFile')->extension();
                              $originalName=$request->file('invoiceFile')->getClientOriginalName();
                              $uniqueName = uniqid() . '_' . $originalName;
                              $global=app("app.global");
                              $dayName=$global[0];
                              $currDate=$global[1];
                              $monthName=$global[2];
                              $time=$global[3];
                              $randomID=app("app.random_number");
                              $user_id=$request->query('id');
                              $username=$request->query('name');
                              $data=[
                                    'id'=>$randomID,
                                     'user_id'=>$user_id,
                                     'name'=>$username,
                                     'uploadedDay'=>$dayName,
                                     'uploadedMonthName'=>$monthName,
                                     'invoiceFileType'=>$extension,
                                     'uploadedDate'=>$currDate,
                                     'uploadedTime'=>$time 
                              ];
                              
                              $flag=$this->invoice_service->registerInvoice($data);

                              if($flag){
                                    dd('The invoice is added sucessfully');
                              }else{
                                   return redirect()
                                          ->back()
                                          ->with('inoiceNotAdded','Invoice not added');  
                              }
                   }else{
                        return redirect()
                              ->back()
                              ->with('noUploadedFile','No uploaded'); 
                   }
        }
}
