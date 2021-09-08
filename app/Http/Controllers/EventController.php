<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class EventController extends Controller
{
    public function show()
    {
        return Inertia::render('Welcome', [
            'event' => 'event',
        ]);
    }
}
