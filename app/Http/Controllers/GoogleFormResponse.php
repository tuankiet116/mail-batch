<?php

namespace App\Http\Controllers;

use App\Services\GoogleFormService;
use Illuminate\Http\Request;

class GoogleFormResponse extends Controller
{
    public function __construct(private GoogleFormService $googleFormService)
    {
    }


    public function handleWebhook(Request $request): void
    {
        $data = [
            "email" => '',
            "sits" => '',
            
        ];
        $this->googleFormService->handleGoogleForm($request);
    }
}
