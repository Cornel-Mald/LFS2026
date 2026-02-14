<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'tasks' => [
            // 'Go to the market',
            // 'Walk the dog',
            // 'Watch a video turtorial',
        ]
    ]);
});

# short hand for routes that only return a view
Route::view('/contact', 'contact', [
    'greeting' => 'Hello :name, welcome to the contact page!',
    # 'person' => 'Cornel',
    // 'person'=> request('person')
    'person' => request('person', 'World')
]);

Route::get('/ideas', function () {
    $ideas = session()->get('ideas', []);

    return view('ideas', [
	    'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/ideas');
});

Route::get('/delete-ideas', function() {
    session()->forget('ideas');

    return redirect('/ideas');
});
