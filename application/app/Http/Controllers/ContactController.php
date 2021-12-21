<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'name' => ['required'],
            'email' => ['required','email'],
            'description' => ['required'],
        ] );

        if ($validator->fails()){
            return redirect('/#contact')
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        Contact::create($request->all());
        session()->flash('contact_status');

        return redirect('/#contact');
    }
}
