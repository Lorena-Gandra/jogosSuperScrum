<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function showForm()
    {
        return view('event-login');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'event_type' => 'required|string|max:255',
            'event_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('event_image')->store('images', 'public');

        Event::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'event_type' => $request->event_type,
            'event_image' => $imagePath,
        ]);

        return back()->with('success', 'Evento registrado com sucesso!');
    }
}
