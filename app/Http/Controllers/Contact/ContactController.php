<?php

namespace App\Http\Controllers\Contact;

//Use required debendancies

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Str;

use App\Services\ContactUsService;

use App\Jobs\ContactUs;

class ContactController extends Controller
{       
        protected ContactUsService $contact_use_service;
        
        public function __construct(ContactUsService $contact_use_service){

            $this->contact_use_service=$contact_use_service;
        } 

        //sent mail to blatform

        public function mailUS(Request $req){

                 $name=$req->input('name');
                 $email=$req->input('email');
                 $subject=$req->input('subject');
                 $message=$req->input('message');
                 $currDate=date('Y-m-d');
                 $date_format = Carbon::parse($currDate)->format('F j,Y');
                 $randomString=Str::random(12);
                 $refrenceNumber="#" . $randomString;
                 $day=date('l',strtotime($currDate));
                 $monthName=date('F',strtotime($currDate));
                 $time=date('H:m:s');
                 $data=[
                     
                       'name'=>$name,
                       'email'=>$email,
                       'contact_month'=>$monthName,
                       'contact_day'=>$day,
                       'message'=>$message,
                       'contact_us_date'=>$currDate,
                       'contact_us_time'=>$time
                 ];
                 
                 $inserted=$this->contact_use_service->storeMailInfo($data);

                 if(!$inserted){
                        
                       return redirect()->back();
                 }else{
                    
                      ContactUs::dispatch($email,$subject,$message,$name,$refrenceNumber,$time,$date_format);
                 }
        }
}
