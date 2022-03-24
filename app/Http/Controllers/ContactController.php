<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\ContactReason;
use App\ContactsSite;

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
            'email' => 'email|unique:contacts_site',
            'contacts_reason_id' => 'required',
            'message' => 'required|max:2000',

        ]);

         ContactsSite::create($request->all());
         return redirect()->route('site.index');

        /*
        dd($request);
        */
        
    }

}