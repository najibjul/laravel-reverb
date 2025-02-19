<?php

use App\Events\MessageSent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send', function () {
    broadcast(new MessageSent('Message from event!!! ' . Carbon::now()->format('Y-m-d H:i:s')));
});

