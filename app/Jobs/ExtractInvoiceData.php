<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ExtractInvoiceData implements ShouldQueue
{
    use Queueable;
    
    protected string $apiURL;

    public function __construct(string $apiURL)
    {
           $this->apiURL=$apiURL;
    }

    public function handle(): void
    {
        $response = Http::get('https://api.example.com');
        $jsonRes=$response->json();
        $storeForOneDay=60*60*24;
        Cache::put('res',$jsonRes,$storeForOneDay);
    }
}
