<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    //
    public function view()
    {
        return view('contact.create');
    }
    function store(ContactRequest $request)
    {
        // return $request->all();
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'companyname' => $request->input('companyname'),
            'tel' => $request->input('tel'),
            'gender' => $request->input('gender'),
            'content' => $request->input('content')
        ];
        // Mail::to('stick.inlove.withyou9x@gmail.com')
        // ->send(new ContactMail($data));
        // return redirect()->to('contact/complete');
        return view('contact.confirm', compact('data'));
    }
    function action(Request $request)
    {
        if ($request->input('action')) {
            // $input=['gender'=>$request->input('gender')];
            $data=$request->except('action');
            $act = $request->input('action');
            // return $act;
            // return $data;
            if ($act == 'sendmail') {
                Mail::to('stick.inlove.withyou9x@gmail.com')
                    ->send(new ContactMail($data));
                return redirect()->to('contact/complete');
            }
            if($act=='edit'){
                return view('contact.create',compact('data'));
            }
        }
    }
    function completeView()
    {
        return view('contact.complete');
    }
}
