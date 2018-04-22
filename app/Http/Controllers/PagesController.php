<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\MessageRequest;

class PagesController extends Controller
{
    public function welcomeHandler()
    {
        return view('welcome');
    }

    public function blueHandler()
    {
        return view('blue');
    }

    public function redHandler()
    {
        return view('red');
    }

    public function yellowHandler()
    {
        return view('yellow');
    }

    public function greenHandler()
    {
        return view('green');
    }

    public function violetHandler()
    {
        return view('violet');
    }

    public function blurHandler($color = 'gray')
    {
        return view('blur', compact('color'));
    }

    public function contactHandler()
    {
        return view('contact');
    }

    public function messageHandler(MessageRequest $request)
    {
        /*
         * this is used whe Request is used
         * $this->validate($request, [
         *  'name' => ['required', 'string'],
         *   'email' => 'required|email',
         *   'message' => 'required'
         * ]);
         */

        if (!$request->has('name')) {
            return new \Exception('No name');
        }

        if (!$request->has('email')) {
            return new \Exception('No email');
        }

        if (!$request->has('message')) {
            return new \Exception('No message');
        }

        $request->input('name');

        //This is a form of response
        response('Texto En Response', 201, ['X-TOKEN' => 'ThisIsAToken']);

        response('Texto En Response', 201)
            ->header('X-Token', 'secret')
            ->header('X-Token-2', 'secret-2')
            ->cookie('SIM', '1234');

        $data = $request->all();
        response()->json(compact('data'), 202)
            ->header('x-token', 'super-token');

        //This array will be convert to JSON
        //return $request->all();

        //You use this line if you need to go to another page
        redirect()->route('contact')->with('info', 'Your message was send');

        //You use this line if you need back to the last page
        return back()->with('info', 'Your message was send');
    }
}
