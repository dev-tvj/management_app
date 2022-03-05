<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactReason;

class DefaultController extends Controller
{
    public function default() {

        $contact_reasons = ContactReason::all();

        return view('site.default', ['contact_reasons' => $contact_reasons]);
        
    }
}