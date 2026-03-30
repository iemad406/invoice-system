<?php

namespace App\Services;

use App\Models\ContactUS\Contact_US;

class ContactUsService
{
      public function storeMailInfo(array $data){
           
                 $instance=new Contact_US();
                 $instance->contact_id=$this->generate_random_identifier();
                 $instance->name=$data['name'];
                 $instance->email=$data['email'];
                 $instance->contact_month=$data['contact_month'];
                 $instance->contact_day=$data['contact_day'];
                 $instance->message=$data['message'];
                 $instance->contact_us_date=$data['contact_us_date'];
                 $instance->contact_us_time=$data['contact_us_time'];
                 
                 if($instance->save()){
                    return true;
                 }

                 return false;
      }

      public function generate_random_identifier() : int{

        return mt_rand(100000, 999999);
    }
}
