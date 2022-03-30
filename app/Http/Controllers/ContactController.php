<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactPost(Request $request) {

        $this->validate($request,
        [
        'name'  => 'required|max:30',
        'surname'  => 'required|max:30',
        'topic' => 'required',
        'email' => 'required|email',
        'message' => 'required|max:800',
       
        
       ]);

       $message = Contact::create([

        'name' => $request->name,
        'surname' => $request->surname,
        'email'   => $request->email,
        'topic' => $request->topic,
        'message' => $request->message,

    ]);

    session()->flash('success', 'Thank you for contacting us!');

    return redirect()->back();
      


    }
    

    public function getTopics() {

        $topics = Topic::all();

        return response()->json(['topics' => $topics]);


    }




}
