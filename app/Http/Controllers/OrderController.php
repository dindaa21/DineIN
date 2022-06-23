<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('Form');
    }

    public function store(Request $request)
    {
        $data = Order::create([
            'resto'     => $request->resto,
            'guestname'=> $request->guestname,
            'guestmail' => $request->guestmail,
            'comment'   => $request->comment,
            'adults'    => $request->adults,
            'payment'   => $request->payment,
            'reserv_date'       => $request->reserv_date,
            'reserv_time'   => $request->reserv_time,
            'guesttelephone'=> $request->guesttelephone
        ]);
        $data->save();

        if($data)
            return back()->with('success', "Reservation Success! Thank You!");
        else
            return back()->with('error', "Reservation Failed! Please Try Again");
    }
}
