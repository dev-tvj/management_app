<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\ContactReason;

class ContactController extends Controller
{
    public function contact() {

        $contact_reasons = ContactReason::all();

        return view('site.contact', ['title' => 'Contact us', 'contact_reasons' => $contact_reasons]);
    }

    public function save(Request $request) {
        
        
        $request->validate([
            
            'name' => 'required|min:3|max:40',
            'phone' => 'required',
            'email' => 'required',
            'contact_reason' => 'required',
            'message' => 'required|max:2000',

        ]);
        
        /*
        dd($request);
        */
        
    }

}