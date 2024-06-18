<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use \App\Mail\ContactEmail;
Route::get('/', function () {
    return view('welcome');
});
Route::post('/contact', function(){
    Mail::to('vedoorbbs@gmail.com')->send(new ContactEmail(request()->all()));



    dd('mail sent successfully');
});
