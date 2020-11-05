<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index() {
        $firstEvents = Event::where('date', '2020-11-11 00:00:00')->orderBy('id', 'asc')->get();
        $lastEvents = Event::where('date', '2020-11-12 00:00:00')->orderBy('id', 'asc')->get();
        foreach ($firstEvents as $index => $event) {
            if ($index % 3 == 0) {
                $event->open = true;
            } else {
                $event->open = false;
            }
            if (($index + 1) % 3 == 0) {
                $event->close = true;
            } else {
                $event->close = false;
            }
        }
        foreach ($lastEvents as $index => $event) {
            if ($index % 3 == 0) {
                $event->open = true;
            } else {
                $event->open = false;
            }
            if (($index + 1) % 3 == 0) {
                $event->close = true;
            } else {
                $event->close = false;
            }
        }
        return view('welcome')->with('events', [$firstEvents, $lastEvents]);
    }
}
