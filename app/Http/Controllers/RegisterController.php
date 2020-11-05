<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscriber;
use App\Models\Event;
use App\Mail\AcknowledgmentMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function index()
    {
        $firstEvents = Event::where('date', '2020-11-11 00:00:00')->where('type', '!=', 'inauguration')->orderBy('id', 'asc')->get();
        $lastEvents = Event::where('date', '2020-11-12 00:00:00')->orderBy('id', 'asc')->get();
        return view('register')->with('events', [$firstEvents, $lastEvents]);
    }

    public function register(Request $request) {
        $requestKeys = array_keys($request->all());

        $request->validate([
            'name' => 'required',
            'firstLastName' => 'required',
            'secondLastName' => 'required',
            'ocupation' => 'required',
            'email' => 'required|email|unique:suscribers',
            'nextEvents' => 'required',
            'age' => 'required|numeric',
            'sex' => 'required',
            'university' => 'required',
            'previousExperience' => 'required',
        ]);

        $suscriber = new Suscriber();
        $suscriber->name = $request->name;
        $suscriber->first_last_name = $request->firstLastName;
        $suscriber->second_last_name = $request->secondLastName;
        $suscriber->ocupation = $request->ocupation;
        $suscriber->email = $request->email;
        $suscriber->terms_accepted = $request->terms == 'on' ? true : false;
        $suscriber->suscribed = $request->nextEvents == 'yes' ? true : false;
        $suscriber->has_previous_financial_experience = $request->previousExperience == 'yes' ? true : false;
        $suscriber->age = $request->age;
        $suscriber->sex = $request->sex;
        $suscriber->university = $request->university;
        $requestKeys = array_keys($request->all());
        $events = [];
        for ($i=0; $i < sizeof($requestKeys); $i++) {
            if(strpos($requestKeys[$i],'event') === 0) {
                if($request[$requestKeys[$i]] == 'on'){
                   $eventId = (integer) str_replace('event', '', $requestKeys[$i]);
                   array_push($events, $eventId);
                }
            }
        }
        $suscriber->save();
        $suscriber->events()->sync($events, false);

        Mail::to($suscriber->email)->send(new AcknowledgmentMailable($suscriber));
        return back()->withInput();
    }
}
