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

        return $request->all();
    }
}
