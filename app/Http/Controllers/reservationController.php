<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class reservationController extends Controller
{
    public function reservation(Request $req)
    {
        $data = new reservation;

        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->number = $req->gust;
        $data->message = $req->message;
        $data->save();
        return redirect()->back();
    }
    public function reservationMenu()
    {
        $data = reservation::all();
        return view('admin.reservation', ["data" => $data]);
    }
}
