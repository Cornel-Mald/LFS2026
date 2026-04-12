<?php

use Illuminate\Support\Facades\Route;
use App\Models\idea;
// use Illuminate\Support\Facades\DB;
// use Inertia\Inertia;

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
    // $ideas = session()->get('ideas', []);

    // $ideas = \Illuminate\Support\Facades\DB::table('ideas')->get();
    
    // $ideas = idea::all();
    // $ideas = idea::find(1);
    $ideas = idea::where('state', 'pending')->get();

    // dd($ideas);
    
    // return $ideas;
    // return $ideas[0];
    // return $ideas[0]->description;

    return view('ideas', [
	    'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    // $idea = request('idea');

    // session()->push('ideas', $idea);

    idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});

Route::get('/delete-ideas', function() {
    session()->forget('ideas');

    return redirect('/ideas');
});
