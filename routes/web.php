<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/home-map', 'index_map');
Route::view('/home-parallax', 'index_parallax');
Route::view('/home-slider', 'index_slideshow');
Route::view('/home-video', 'index_video');
Route::view('/about', 'about');
Route::view('/property', 'property');
Route::view('/property-details', 'property_details');
Route::view('/gallery', 'gallery');
Route::view('/agent-profile', 'agent_profile');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/faq', 'faq');
Route::view('/blog', 'blog');
Route::view('/blog-post', 'blog_post');
Route::view('/single-agent', 'single_agent');
Route::view('/thank-you', 'thank_you');

Route::view('/contact', 'contact');
Route::post('/contact', function (\Illuminate\Http\Request $request) {
    return redirect('/thank-you');
});

