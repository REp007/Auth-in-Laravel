<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PodcastProcessed;

class testEvent extends Controller
{
    public function testEvent1(){
        event(new PodcastProcessed());
    }

    public function StartEvent(){

        // event(new )
    }
}
