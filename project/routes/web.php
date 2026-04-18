<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
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

Route::get('/ideas', [IdeaController::class, 'index']);
Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);
Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);
Route::post('/ideas', [IdeaController::class, 'store']);
Route::get('/delete-ideas', [IdeaController::class, 'deleteIdeas']);
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);