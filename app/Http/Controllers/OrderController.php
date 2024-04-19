<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShip;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function sendEmail()
    {
        Mail::to('mail.response.lara@gmail.com')->send(new OrderShip(Auth::id(), Auth::user()->name, Auth::user()->email));
        echo 'good, email sent successfully!';
    }
}
