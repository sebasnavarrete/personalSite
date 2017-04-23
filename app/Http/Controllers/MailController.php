<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function send(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required',
            'body' => 'required'
        ]);
        Mail::send('emails.mensaje', $data, function ($message) use ($request) {
            $message->subject($request->subject);
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
        });
        return Redirect::to('/')->with('send', true);
    }
}
