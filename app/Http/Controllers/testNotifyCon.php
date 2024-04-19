<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\test;
use Illuminate\Support\Facades\Notification;

class testNotifyCon extends Controller
{

    public function testN(){
        $users = User::orderBy('id', 'DESC')->limit(1)->get();
        Notification::send($users, new test());
    }
}
