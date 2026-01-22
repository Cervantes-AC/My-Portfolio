<?php

use Illuminate\Support\Facades\Route;

// // Welcome
// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', function () {
return view('home');
})->name('home');

// About
Route::get('/about', function () {
    return view('about', [
        'name' => 'Aaron Clyde Cervantes',
        'course' => 'Bachelor of Science in Information Technology',
        'university' => 'Central Mindanao University',
    ]);
})->name('about');

// Projects
Route::get('/projects', function () {
    $projects = [
        [
            'title' => 'Project 1',
            'description' => 'My first web project',
        ],
        [
            'title' => 'Project 2',
            'description' => 'E-commerce website',
        ],
        [
            'title' => 'Project 3',
            'description' => 'Mobile app design',
        ],
    ];

    return view('projects', compact('projects'));
})->name('projects');

// Contact
Route::get('/contact', function () {
    return view('contact', [
        'email' => 's.cervantes.aaronclyde@cmu.edu.ph', 
        'phone' => '+63 991 430 7358',    
    ]);
})->name('contact');
