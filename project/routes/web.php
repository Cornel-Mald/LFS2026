<?php

use Illuminate\Support\Facades\Route;
use App\Models\idea;
// use Illuminate\Support\Facades\DB;
// use Inertia\Inertia;


// welcome page
// ------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});
// ------------------------------------------------------------



// about page
// ------------------------------------------------------------
Route::get('/about', function () {
    return view('about', [
        'tasks' => [
            // 'Go to the market',
            // 'Walk the dog',
            // 'Watch a video turtorial',
        ]
    ]);
});
// ------------------------------------------------------------



// contact page
// ------------------------------------------------------------
// short hand for routes that only return a view
Route::view('/contact', 'contact', [
    'greeting' => 'Hello :name, welcome to the contact page!',
    # 'person' => 'Cornel',
    // 'person'=> request('person')
    'person' => request('person', 'World')
]);
// ------------------------------------------------------------



// ideas page
// ------------------------------------------------------------
Route::get('/ideas', function () {
    // $ideas = session()->get('ideas', []);

    // $ideas = \Illuminate\Support\Facades\DB::table('ideas')->get();
    
    $ideas = idea::all();
    // $ideas = idea::find(1);
    // $ideas = idea::where('state', 'pending')->get();
    // $ideas = idea::query()
    //     ->when(request('state'), function($query, $state) {
    //         // dd($state);
    //         $query->where('state', $state);
    //     })
    //     ->get();

    // dd($ideas);
    
    // return $ideas;
    // return $ideas[0];
    // return $ideas[0]->description;

    return view('ideas/index', [
	    'ideas' => $ideas,
    ]);
});
// ------------------------------------------------------------



// show singular idea page
// ------------------------------------------------------------
Route::get('/ideas/{idea}', function (idea $idea) {
    // dd($id);
    // $idea = idea::find($id);

    if (is_null($idea)) {
        abort(404);
    }

    // return $idea;
    return view('ideas/show', [
	   'idea' => $idea,
    ]);

});
// ------------------------------------------------------------



// edit view singular idea page
// ------------------------------------------------------------
Route::get('/ideas/{idea}/edit', function (idea $idea) {

     return view('ideas/edit', [
	    'idea' => $idea,
     ]);

});
// update singular idea page
Route::patch('/ideas/{idea}', function (idea $idea) {
    $idea->update([
        'description' => request ('description')
    ]);
    return redirect ('/ideas/' . $idea->id);
});
// ------------------------------------------------------------



// make idea page
// ------------------------------------------------------------
Route::post('/ideas', function () {
    // $idea = request('idea');

    // session()->push('ideas', $idea);

    idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect('/ideas');
});
// ------------------------------------------------------------



//  delete idaes page.
// ------------------------------------------------------------
Route::get('/delete-ideas', function() {
    // session()->forget('ideas');
    idea::truncate();

    return redirect('/ideas');
});
// ------------------------------------------------------------



// destroy singular idea page
// ------------------------------------------------------------
Route::delete('/ideas/{idea}', function (idea $idea) {
    $idea->delete();

    return redirect('/ideas');

});