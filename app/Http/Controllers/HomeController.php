<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use function Couchbase\defaultDecoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['telephone'] = $request->get('telephone');
        $contact['message'] = $request->get('message');

        Mail::to('clement.lesage@viacesi.fr')->send(new ContactMail($contact));

        return redirect()->back()->with('message', 'Votre demande a été pris en compte ! Nous vous recontacterons dans de plus brefs délais.');
    }
}
