<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSubmitController extends Controller
{
    /** create form submit method */
    public function formSubmit(Request $request)
    {
        //validate form data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',

        ]);
        /** Get name from form */
         $name = $request->input('name');
         //$fileName = 'test_'.rand().'.txt';
         //\Storage::cloud()->put($fileName, $name);
         
        /** Print thank you message  */
        print_r($request->input());
    }
}
