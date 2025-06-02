<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Mail\ReservationConfirmation;
class ReservationController extends Controller
{
    public function create()
    {
        $services = Service::all();
        return view('reservation.create', compact('services'));
    }

public function store(Request $request)
{
    $request->validate([
        'client_name' => 'required|string|max:255',
        'client_email' => 'required|email',
        'client_phone' => 'required|string',
        'service_id' => 'required|exists:services,id',
        'nail_length' => 'required|in:long,medium,short',
        'date' => 'required|date',
        'hour' => 'required',
        'payment_method' => 'required|in:cash,card',
    ]);

    // Assemble la date et l'heure pour reserved_at
    $date = $request->input('date'); // format Y-m-d
    $hour = $request->input('hour'); // format HH:MM
    $reserved_at = $date . ' ' . $hour . ':00';

    // Vérifie le créneau
    $exists = Reservation::where('reserved_at', $reserved_at)->exists();
    if ($exists) {
        return back()->withErrors(['hour' => 'Ce créneau est déjà réservé, veuillez en choisir un autre.'])->withInput();
    }

    $service = Service::findOrFail($request->service_id);
    $price = $service->getPriceByLength($request->nail_length);

    if ($price === null) {
        return back()->withErrors(['nail_length' => 'Ce service n’est pas disponible pour cette longueur d’ongles.'])->withInput();
    }

    // Récupérer l'option choisie
    $options = $request->options ?? null;

    // Ajouter un supplément selon l'option choisie
    if ($options === 'nail_art_simple') {
        $price += 5;
    } elseif ($options === 'nail_art_extra') {
        $price += 15;
    }

    $reservation = Reservation::create([
        'client_name' => $request->client_name,
        'client_email' => $request->client_email,
        'client_phone' => $request->client_phone,
        'service_id' => $request->service_id,
        'nail_length' => $request->nail_length,
        'reserved_at' => $reserved_at,
        'options' => $options,
        'price' => $price,
        'payment_method' => $request->payment_method,
    ]);

    $details = [
        'client_name' => $reservation->client_name,
        'client_email' => $reservation->client_email,
        'client_phone' => $reservation->client_phone,
        'service' => $service->name,
        'reserved_at' => $reservation->reserved_at,
        'nail_length' => $reservation->nail_length,
        'options' => $options ?? 'Aucune',
        'price' => $reservation->price,
        'payment_method' => $reservation->payment_method,
    ];

    session()->flash('success', 'Réservation enregistrée avec succès !');
    session()->flash('reservation_details', $details);

    Mail::to($reservation->client_email)->send(new ReservationConfirmation($details, false));
    Mail::to('ericdewanou13500@gmail.com')->send(new ReservationConfirmation($details, true));

    return redirect()->route('reservation.create');
}

}
